<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class ModifyCapabilityRequest extends Model
{
    /**
     * @var string
     */
    public $capabilityName;

    /**
     * @var string
     */
    public $capabilityId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'capabilityName' => 'CapabilityName',
        'capabilityId'   => 'CapabilityId',
        'regionId'       => 'RegionId',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capabilityName) {
            $res['CapabilityName'] = $this->capabilityName;
        }
        if (null !== $this->capabilityId) {
            $res['CapabilityId'] = $this->capabilityId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCapabilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapabilityName'])) {
            $model->capabilityName = $map['CapabilityName'];
        }
        if (isset($map['CapabilityId'])) {
            $model->capabilityId = $map['CapabilityId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
