<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CopySnapshotResponseBody;

use AlibabaCloud\Tea\Model;

class allocationId extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example cn-chengdu-telecom-4
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description An array of instance IDs.
     *
     * @var string[]
     */
    public $instanceId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocationId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }

        return $model;
    }
}
