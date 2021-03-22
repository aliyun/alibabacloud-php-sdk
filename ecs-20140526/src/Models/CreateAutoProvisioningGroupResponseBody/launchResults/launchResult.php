<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults\launchResult\instanceIds;
use AlibabaCloud\Tea\Model;

class launchResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $zoneId;

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
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'zoneId'       => 'ZoneId',
        'errorMsg'     => 'ErrorMsg',
        'instanceIds'  => 'InstanceIds',
        'instanceType' => 'InstanceType',
        'spotStrategy' => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
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

        return $model;
    }
}
