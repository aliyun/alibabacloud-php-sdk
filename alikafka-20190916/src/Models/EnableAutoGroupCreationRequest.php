<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class EnableAutoGroupCreationRequest extends Model
{
    /**
     * @description Specify whether to enable the flexible group creation feature. Valid values:
     *
     *   **true**: enables the flexible group creation feature.
     *   **false**: disabled the flexible group creation feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The instance ID.
     *
     * You can call the [GetInstanceList](~~437663~~) operation to query instances.
     * @example alikafka_post-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enable'     => 'Enable',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
     * @return EnableAutoGroupCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
