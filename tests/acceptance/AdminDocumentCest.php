<?php
use \AcceptanceTester;

class AdminDocumentCest
{
	public function _before(AcceptanceTester $I, Step\Acceptance\Login $login)
	{
		$I->amOnPage('/');
		if ($I->loadSessionSnapshot('admin')) return;
		$login->loginAsAdmin('admin');
		$I->saveSessionSnapshot('admin');
	}

	public function _after(AcceptanceTester $I)
	{
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_001(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_001");
		$I->amOnPage('/index.php?module=admin&act=dispDocumentAdminList');
		$I->see('Welcome mobile XE');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_002(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_002");
		$I->amOnPage('/index.php?module=admin&act=dispDocumentAdminList');
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
		$I->click("공개");
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
		$I->click("비밀");
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
		$I->click("임시");
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
		$I->click("신고 목록");
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_003(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_003");
		$I->amOnPage('/index.php?module=admin&act=dispDocumentAdminList');
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
		$I->amOnPage('/index.php?module=admin&act=dispDocumentAdminList&page=2');
		$I->seeElement('.x_btn-group .x_btn.modalAnchor.xe-modal-window.x_disabled');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_004(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_004");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "제목");
		$I->fillField("search_keyword", "Board1");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('Board1');
		$I->dontsee('Board2');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_005(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_005");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "내용");
		$I->fillField("search_keyword", "Board2");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('Board2');
		$I->dontsee('Board1');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_006(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_006");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "아이디");
		$I->fillField("search_keyword", "user_id");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('일반글');
		$I->dontsee('노티스');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_007(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_007");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "회원 번호");
		$I->fillField("search_keyword", "268");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('일반글');
		$I->dontsee('노티스');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_008(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_008");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "사용자 이름");
		$I->fillField("search_keyword", "user_name");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('일반글');
		$I->dontsee('노티스');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_009(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_009");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "닉네임");
		$I->fillField("search_keyword", "nick_name");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('일반글');
		$I->dontsee('노티스');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_010(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_010");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "이메일");
		$I->fillField("search_keyword", "email@domain.com");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('일반글');
		$I->dontsee('노티스');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_011(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_011");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "홈페이지");
		$I->fillField("search_keyword", "http://example.com/");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('Board1');
		$I->see('일반글');
		$I->dontsee('Board2');
		$I->dontsee('노티스');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_012(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_012");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "공지사항");
		$I->fillField("search_keyword", "Y");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('노티스');
		$I->dontsee('일반글');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_013(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_013");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "비밀글");
		$I->fillField("search_keyword", "Y");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('비밀글');
		$I->dontsee('노티스');
		$I->dontsee('일반글');
	}
	
	/**
	* @group admin-document
	* @group admin-document-001
	*/
	public function admin_document_001_014(AcceptanceTester $I)
	{
		$I->wantTo("admin_document_001_014");
		$I->amOnPage("/index.php?module=admin&act=dispDocumentAdminList");
		$I->selectOption("select[name=\"search_target\"]", "태그");
		$I->fillField("search_keyword", "board2");
		$I->click("button.x_btn.x_btn-inverse");
		$I->see('Board2');
		$I->dontsee('Board1');
	}
}
