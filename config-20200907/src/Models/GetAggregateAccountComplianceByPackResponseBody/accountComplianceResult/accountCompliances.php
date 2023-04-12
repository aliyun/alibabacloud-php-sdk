<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult;

use AlibabaCloud\Tea\Model;

class accountCompliances extends Model
{
    /**
     * @description The ID of the member account in the account group.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The name of the member account in the account group.
     *
     * @example Alice
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The compliance evaluation result. Valid values:
     *
     *   COMPLIANT: The resources of the member accounts are evaluated as compliant.
     *   NON_COMPLIANT: The resources of the member account are evaluated as non-compliant.
     *   NOT_APPLICABLE: The rules do not apply to the resources of the member account.
     *   INSUFFICIENT_DATA: No resource data is available.
     *
     * @example COMPLIANT
     *
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
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountCompliances
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
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        return $model;
    }
}
