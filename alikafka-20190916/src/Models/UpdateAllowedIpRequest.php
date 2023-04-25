<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpdateAllowedIpRequest extends Model
{
    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $allowedListIp;

    /**
     * @example vpc
     *
     * @var string
     */
    public $allowedListType;

    /**
     * @example tf-testAccEcsImageConfigBasic3549descriptionChange
     *
     * @var string
     */
    public $description;

    /**
     * @example alikafka_pre-cn-0pp1cng20***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9092/9092
     *
     * @var string
     */
    public $portRange;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example add
     *
     * @var string
     */
    public $updateType;
    protected $_name = [
        'allowedListIp'   => 'AllowedListIp',
        'allowedListType' => 'AllowedListType',
        'description'     => 'Description',
        'instanceId'      => 'InstanceId',
        'portRange'       => 'PortRange',
        'regionId'        => 'RegionId',
        'updateType'      => 'UpdateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedListIp) {
            $res['AllowedListIp'] = $this->allowedListIp;
        }
        if (null !== $this->allowedListType) {
            $res['AllowedListType'] = $this->allowedListType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
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
        if (isset($map['AllowedListIp'])) {
            $model->allowedListIp = $map['AllowedListIp'];
        }
        if (isset($map['AllowedListType'])) {
            $model->allowedListType = $map['AllowedListType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        return $model;
    }
}
