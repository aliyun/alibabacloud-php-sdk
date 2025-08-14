<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceTitleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountBankName;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $bankAccountNumber;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $registeredAddress;

    /**
     * @var string
     */
    public $registeredLandline;

    /**
     * @var string
     */
    public $unifiedSocialCreditCode;
    protected $_name = [
        'accountBankName' => 'AccountBankName',
        'accountId' => 'AccountId',
        'bankAccountNumber' => 'BankAccountNumber',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'invoiceTitle' => 'InvoiceTitle',
        'registeredAddress' => 'RegisteredAddress',
        'registeredLandline' => 'RegisteredLandline',
        'unifiedSocialCreditCode' => 'UnifiedSocialCreditCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountBankName) {
            $res['AccountBankName'] = $this->accountBankName;
        }

        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->bankAccountNumber) {
            $res['BankAccountNumber'] = $this->bankAccountNumber;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->invoiceTitle) {
            $res['InvoiceTitle'] = $this->invoiceTitle;
        }

        if (null !== $this->registeredAddress) {
            $res['RegisteredAddress'] = $this->registeredAddress;
        }

        if (null !== $this->registeredLandline) {
            $res['RegisteredLandline'] = $this->registeredLandline;
        }

        if (null !== $this->unifiedSocialCreditCode) {
            $res['UnifiedSocialCreditCode'] = $this->unifiedSocialCreditCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountBankName'])) {
            $model->accountBankName = $map['AccountBankName'];
        }

        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['BankAccountNumber'])) {
            $model->bankAccountNumber = $map['BankAccountNumber'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InvoiceTitle'])) {
            $model->invoiceTitle = $map['InvoiceTitle'];
        }

        if (isset($map['RegisteredAddress'])) {
            $model->registeredAddress = $map['RegisteredAddress'];
        }

        if (isset($map['RegisteredLandline'])) {
            $model->registeredLandline = $map['RegisteredLandline'];
        }

        if (isset($map['UnifiedSocialCreditCode'])) {
            $model->unifiedSocialCreditCode = $map['UnifiedSocialCreditCode'];
        }

        return $model;
    }
}
