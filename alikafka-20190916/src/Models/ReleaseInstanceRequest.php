<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $forceDeleteInstance;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'regionId'            => 'RegionId',
        'forceDeleteInstance' => 'ForceDeleteInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->forceDeleteInstance) {
            $res['ForceDeleteInstance'] = $this->forceDeleteInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ForceDeleteInstance'])) {
            $model->forceDeleteInstance = $map['ForceDeleteInstance'];
        }

        return $model;
    }
}
