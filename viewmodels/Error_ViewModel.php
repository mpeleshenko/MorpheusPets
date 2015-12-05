<?php
  require_once 'viewmodels/ViewModel.php';
  require_once 'utils/string.php';

  class Error_ViewModel extends ViewModel
  {
    /**
     * @var MorpheusPetsData data model
     */
    private $data;

    /**
     * User_ViewModel constructor.
     */
    public function __construct()
    {
      parent::__construct();
      $this->data = MorpheusPetsData::getInstance();
    }

    /**
     * Render the username not found error page
     *
     * @param string $username username of user not found
     */
    public function renderFailSearch( $username )
    {
      $view_data[ 'page_title' ] = 'User Not Found';
      $view_data[ 'js' ]         = '<script src="js/error_page.js"></script>';

      $view_data[ 'username_not_found' ] = $username;

      $this->renderTemplate( 'templates/header.php', $view_data );
      $this->renderTemplate( 'templates/error_view.php', $view_data );
      $this->renderTemplate( 'templates/footer.php', $view_data );
    }

    /**
     * Render the user id not found error page
     *
     * @param int $id id of user not found
     */
    public function renderUserNotExist( $id )
    {
      $view_data[ 'page_title' ] = 'User Not Found';
      $view_data[ 'js' ]         = '<script src="js/error_page.js"></script>';

      $view_data[ 'user_id_not_found' ] = $id;

      $this->renderTemplate( 'templates/header.php', $view_data );
      $this->renderTemplate( 'templates/error_view.php', $view_data );
      $this->renderTemplate( 'templates/footer.php', $view_data );
    }

    /**
     * Render the pet id not found error page
     *
     * @param int $id id of pet not found
     */
    public function renderPetNotExist( $id )
    {
      $view_data[ 'page_title' ] = 'Pet Not Found';
      $view_data[ 'js' ]         = '<script src="js/error_page.js"></script>';

      $view_data[ 'pet_id_not_found' ] = $id;

      $this->renderTemplate( 'templates/header.php', $view_data );
      $this->renderTemplate( 'templates/error_view.php', $view_data );
      $this->renderTemplate( 'templates/footer.php', $view_data );
    }

    /**
     * Render the pet cannot be edited error page
     *
     * @param Pet $pet pet that cannot be edited
     */
    public function renderEditPetNotAllowed( $pet )
    {
      $view_data[ 'page_title' ] = 'Pet Not Found';
      $view_data[ 'js' ]         = '<script src="js/error_page.js"></script>';

      $view_data[ 'pet_edit_not_allowed' ] = $pet;

      $this->renderTemplate( 'templates/header.php', $view_data );
      $this->renderTemplate( 'templates/error_view.php', $view_data );
      $this->renderTemplate( 'templates/footer.php', $view_data );
    }
  }
