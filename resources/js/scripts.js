/**
 *
 * Scripts
 *
 * Initialization of the template base and page scripts.
 * 
 * es responsable de inicializar varios componentes y scripts necesarios para la funcionalidad de la plantilla y las páginas específicas del sitio web.
 *
 */

class Scripts {
  constructor() {
    this._initSettings();
    this._initVariables();
    this._addListeners();
    this._init();
  }

  // Showing the template after waiting for a bit so that the css variables are all set
  // Initialization of the common scripts and page specific ones
  _init() {
    setTimeout(() => {
      document.documentElement.setAttribute('data-show', 'true');
      document.body.classList.remove('spinner');
      this._initBase();
      this._initCommon();
      this._initPages();
    }, 100);
  }

  // Base scripts initialization
  _initBase() {
    // Navigation
    if (typeof Nav !== 'undefined') {
      const nav = new Nav(document.getElementById('nav'));
    }

    // Search implementation
    if (typeof Search !== 'undefined') {
      const search = new Search();
    }

    // AcornIcons initialization
    if (typeof AcornIcons !== 'undefined') {
      new AcornIcons().replace();
    }
  }

  // Common plugins and overrides initialization
  _initCommon() {
    // common.js initialization
    if (typeof Common !== 'undefined') {
      let common = new Common();
    }
  }

  // Pages initialization
  _initPages() {
    // dashboards.patient.js initialization
    if (typeof DashboardsPatient !== 'undefined') {
      const dashboardsPatient = new DashboardsPatient();
    }

    // dashboards.doctor.js initialization
    if (typeof DashboardsDoctor !== 'undefined') {
      const dashboardsDoctor = new DashboardsDoctor();
    }

    // appointments.js initialization
    if (typeof NewAppointment !== 'undefined') {
      const newAppointment = new NewAppointment();
    }

    // consult.js initialization
    if (typeof Consult !== 'undefined') {
      const consult = new Consult();
    }

    // doctors.js initialization
    if (typeof Doctors !== 'undefined') {
      const doctors = new Doctors();
    }

    // doctors.detail.js initialization
    if (typeof DoctorsDetail !== 'undefined') {
      const doctorsDetail = new DoctorsDetail();
    }

    // settings.js initialization
    if (typeof ProfileSettings !== 'undefined') {
      const profileSettings = new ProfileSettings();
    }

    // articles.js initialization
    if (typeof Articles !== 'undefined') {
      const articles = new Articles();
    }
  }

  // Settings initialization
  _initSettings() {
    if (typeof Settings !== 'undefined') {
      const settings = new Settings({attributes: {placement: 'vertical', layout: 'boxed', color: 'light-teal' }, showSettings: true, storagePrefix: 'acorn-medical-assistant-'});
    }
  }

  // Variables initialization of Globals.js file which contains valus from css
  _initVariables() {
    if (typeof Variables !== 'undefined') {
      const variables = new Variables();
    }
  }

  // Listeners of menu and layout changes which fires a resize event
  _addListeners() {
    document.documentElement.addEventListener(Globals.menuPlacementChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });

    document.documentElement.addEventListener(Globals.layoutChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });

    document.documentElement.addEventListener(Globals.menuBehaviourChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });
  }
}

// Shows the template after initialization of the settings, nav, variables and common plugins.
(function () {
  window.addEventListener('DOMContentLoaded', () => {
    // Initializing of the Scripts
    if (typeof Scripts !== 'undefined') {
      const scripts = new Scripts();
    }
  });
})();

// Disabling dropzone auto discover before DOMContentLoaded
(function () {
  if (typeof Dropzone !== 'undefined') {
    Dropzone.autoDiscover = false;
  }
})();
