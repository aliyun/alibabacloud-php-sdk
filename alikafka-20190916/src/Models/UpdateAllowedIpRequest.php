<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpdateAllowedIpRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $updateType;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $allowedListType;

    /**
     * @var string
     */
    public $allowedListIp;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'updateType'      => 'UpdateType',
        'portRange'       => 'PortRange',
        'allowedListType' => 'AllowedListType',
        'allowedListIp'   => 'AllowedListIp',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->allowedListType) {
            $res['AllowedListType'] = $this->allowedListType;
        }
        if (null !== $this->allowedListIp) {
            $res['AllowedListIp'] = $this->allowedListIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAllowedIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['AllowedListType'])) {
            $model->allowedListType = $map['AllowedListType'];
        }
        if (isset($map['AllowedListIp'])) {
            $model->allowedListIp = $map['AllowedListIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
