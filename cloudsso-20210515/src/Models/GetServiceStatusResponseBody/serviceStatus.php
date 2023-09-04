<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class serviceStatus extends Model
{
    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 151266687691****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description Indicates whether you have permissions to enable CloudSSO. Valid values:
     *
     *   Success: You have permissions to enable CloudSSO.
     *   Failed: You do not have permissions to enable CloudSSO.
     *
     * >  The value of this parameter is returned only if the value of `Status` is `Disabled`.
     * @example Success
     *
     * @var string
     */
    public $prerequisiteCheckResult;

    /**
     * @description The ID of the region.
     *
     * @var string[]
     */
    public $regionsInUse;

    /**
     * @description Indicates whether CloudSSO is enabled. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'               => 'AccountId',
        'prerequisiteCheckResult' => 'PrerequisiteCheckResult',
        'regionsInUse'            => 'RegionsInUse',
        'status'                  => 'Status',
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
        if (null !== $this->prerequisiteCheckResult) {
            $res['PrerequisiteCheckResult'] = $this->prerequisiteCheckResult;
        }
        if (null !== $this->regionsInUse) {
            $res['RegionsInUse'] = $this->regionsInUse;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['PrerequisiteCheckResult'])) {
            $model->prerequisiteCheckResult = $map['PrerequisiteCheckResult'];
        }
        if (isset($map['RegionsInUse'])) {
            if (!empty($map['RegionsInUse'])) {
                $model->regionsInUse = $map['RegionsInUse'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
