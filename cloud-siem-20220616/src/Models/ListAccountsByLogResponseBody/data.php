<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountsByLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $imported;

    /**
     * @var string
     */
    public $logCode;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'imported' => 'Imported',
        'logCode' => 'LogCode',
        'mainUserId' => 'MainUserId',
        'prodCode' => 'ProdCode',
        'subUserId' => 'SubUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
