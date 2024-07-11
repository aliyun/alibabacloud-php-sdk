<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeUdpReflectRequest extends Model
{
    /**
     * @description The ID of the instance to query.
     *
     * This parameter is required.
     * @example ddoscoo-cn-i7m25564****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the instance. Valid values:
     *
     *   **cn-hangzhou**: indicates an Anti-DDoS Proxy (Chinese Mainland) instance. This is the default value.
     *   **ap-southeast-1**: indicates an Anti-DDoS Proxy (Outside Chinese Mainland) instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUdpReflectRequest
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

        return $model;
    }
}
