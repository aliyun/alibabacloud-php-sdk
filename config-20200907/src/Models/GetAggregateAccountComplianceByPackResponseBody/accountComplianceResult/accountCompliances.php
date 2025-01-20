<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult;

use AlibabaCloud\Dara\Model;

class accountCompliances extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $complianceType;
    protected $_name = [
        'accountId'      => 'AccountId',
        'accountName'    => 'AccountName',
        'complianceType' => 'ComplianceType',
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

        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
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

        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        return $model;
    }
}
