<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetServiceStatusResponseBody;

use AlibabaCloud\Dara\Model;

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
        'accountId' => 'AccountId',
        'prerequisiteCheckResult' => 'PrerequisiteCheckResult',
        'regionsInUse' => 'RegionsInUse',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->regionsInUse)) {
            Model::validateArray($this->regionsInUse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->prerequisiteCheckResult) {
            $res['PrerequisiteCheckResult'] = $this->prerequisiteCheckResult;
        }

        if (null !== $this->regionsInUse) {
            if (\is_array($this->regionsInUse)) {
                $res['RegionsInUse'] = [];
                $n1 = 0;
                foreach ($this->regionsInUse as $item1) {
                    $res['RegionsInUse'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['PrerequisiteCheckResult'])) {
            $model->prerequisiteCheckResult = $map['PrerequisiteCheckResult'];
        }

        if (isset($map['RegionsInUse'])) {
            if (!empty($map['RegionsInUse'])) {
                $model->regionsInUse = [];
                $n1 = 0;
                foreach ($map['RegionsInUse'] as $item1) {
                    $model->regionsInUse[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
