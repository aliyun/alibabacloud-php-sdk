<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstanceRequest extends Model
{
    /**
     * @description Specifies whether to immediately release the physical resources of the instance. Valid values:
     *
     *   **true**: The physical resources of the instance are immediately released.
     *   **false**: The physical resources of the instance are retained for a period of time before they are released.
     *
     * @example false
     *
     * @var bool
     */
    public $forceDeleteInstance;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example alikafka_post-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'forceDeleteInstance' => 'ForceDeleteInstance',
        'instanceId'          => 'InstanceId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDeleteInstance) {
            $res['ForceDeleteInstance'] = $this->forceDeleteInstance;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ForceDeleteInstance'])) {
            $model->forceDeleteInstance = $map['ForceDeleteInstance'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
