<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountsByLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123xxxxxxx
     *
     * @var string
     */
    public $accountId;

    /**
     * @example sas_account_xxx
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 123xxxxxxx
     *
     * @var int
     */
    public $imported;

    /**
     * @example cloud_siem_waf_xxxxx
     *
     * @var string
     */
    public $logCode;

    /**
     * @example 123XXXXXXXXX
     *
     * @var int
     */
    public $mainUserId;

    /**
     * @example qcloud_waf
     *
     * @var string
     */
    public $prodCode;

    /**
     * @example 123XXXXXXXX
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'accountId'   => 'AccountId',
        'accountName' => 'AccountName',
        'imported'    => 'Imported',
        'logCode'     => 'LogCode',
        'mainUserId'  => 'MainUserId',
        'prodCode'    => 'ProdCode',
        'subUserId'   => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
