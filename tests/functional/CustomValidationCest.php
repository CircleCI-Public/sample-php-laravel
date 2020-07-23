<?php

class CustomValidationCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->haveRecord('posts', [
            'title' => 'Hello Universe',
            'body' => 'You are so awesome',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }

    public function testCustomValidationError(FunctionalTester $I)
    {
        $I->amOnPage('/validation?postal_code=invalid&post_id=123456');
        $I->seeFormErrorMessage('postal_code');
        $I->seeFormErrorMessage('post_id');
    }
}