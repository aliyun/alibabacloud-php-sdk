<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderStatusCheckJobResponseBody\identityProviderStatusCheckJob\jobCheckItems;

class identityProviderStatusCheckJob extends Model
{
    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $identityProviderId;

    /**
     * @var string
     */
    public $identityProviderStatusCheckJobId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var jobCheckItems[]
     */
    public $jobCheckItems;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'checkResult' => 'CheckResult',
        'endTime' => 'EndTime',
        'identityProviderId' => 'IdentityProviderId',
        'identityProviderStatusCheckJobId' => 'IdentityProviderStatusCheckJobId',
        'instanceId' => 'InstanceId',
        'jobCheckItems' => 'JobCheckItems',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->jobCheckItems)) {
            Model::validateArray($this->jobCheckItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->identityProviderStatusCheckJobId) {
            $res['IdentityProviderStatusCheckJobId'] = $this->identityProviderStatusCheckJobId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobCheckItems) {
            if (\is_array($this->jobCheckItems)) {
                $res['JobCheckItems'] = [];
                $n1 = 0;
                foreach ($this->jobCheckItems as $item1) {
                    $res['JobCheckItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['IdentityProviderStatusCheckJobId'])) {
            $model->identityProviderStatusCheckJobId = $map['IdentityProviderStatusCheckJobId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobCheckItems'])) {
            if (!empty($map['JobCheckItems'])) {
                $model->jobCheckItems = [];
                $n1 = 0;
                foreach ($map['JobCheckItems'] as $item1) {
                    $model->jobCheckItems[$n1] = jobCheckItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
