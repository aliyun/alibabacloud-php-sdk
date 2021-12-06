<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class serviceStatus extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $prerequisiteCheckResult;

    /**
     * @var string[]
     */
    public $regionsInUse;

    /**
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
