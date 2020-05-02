"use strict";

function _createForOfIteratorHelper(o) { if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (o = _unsupportedIterableToArray(o))) { var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var it, normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(n); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

document.addEventListener('DOMContentLoaded', function () {
  Script.start();
});
var Script = {
  start: function start() {
    paddingHeader.init();
    mobileMenu.init();
  }
};
window.Script = Script;
var paddingHeader = {
  init: function init() {
    if (document.getElementById('header')) {
      paddingHeader.start();
    }
  },
  start: function start() {
    var headerOffsetHeight = document.getElementById('header').offsetHeight;
    document.querySelector('#first>.wrapper').style.paddingTop = headerOffsetHeight + 'px';
  }
};
var mobileMenu = {
  get_mob_btn: function get_mob_btn() {
    return document.getElementById('mobile_menu');
  },
  get_menu: function get_menu() {
    return document.getElementById('menu');
  },
  init: function init() {
    if (document.getElementById('mobile_menu')) {
      mobileMenu.start();
    }
  },
  start: function start() {
    var mob_btn = mobileMenu.get_mob_btn();
    var menu = mobileMenu.get_menu();
    var menu_items = menu.querySelectorAll('.menu_item');
    mob_btn.addEventListener('click', function () {
      if (mob_btn.classList.contains('opened')) {
        mobileMenu.close();
        modal.close_bg();
      } else {
        mobileMenu.open(menu_items);
        modal.open_bg();
      }
    });
  },
  open: function open(menu_items) {
    mobileMenu.get_mob_btn().classList.add('opened');
    mobileMenu.get_menu().classList.add('open');

    var _iterator = _createForOfIteratorHelper(menu_items),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var menu_item = _step.value;
        menu_item.addEventListener('click', function () {
          mobileMenu.close();
          modal.close_bg();
        });
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
  },
  close: function close() {
    mobileMenu.get_mob_btn().classList.remove('opened');
    mobileMenu.get_menu().classList.remove('open');
  }
};
var modal = {
  bg: document.getElementById('bg_wrapper'),
  open_bg: function open_bg() {
    modal.bg.classList.add('active');
    modal.bg.addEventListener('click', function () {
      this.classList.remove('active');
      mobileMenu.close();
    });
  },
  close_bg: function close_bg() {
    modal.bg.classList.remove('active');
  }
};