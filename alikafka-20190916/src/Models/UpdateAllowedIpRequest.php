<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;

class UpdateAllowedIpRequest extends Model
{
    /**
     * @var string
     */
    public $allowedListIp;
    /**
     * @var string
     */
    public $allowedListType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $portRange;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
