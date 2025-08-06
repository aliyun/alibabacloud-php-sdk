<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults\launchResult\instanceIds;

class launchResult extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'amount' => 'Amount',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'instanceIds' => 'InstanceIds',
        'instanceType' => 'InstanceType',
        'spotStrategy' => 'SpotStrategy',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->instanceIds) {
            $this->instanceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toArray($noStream) : $this->instanceIds;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
