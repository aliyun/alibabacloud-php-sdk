<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeHotKeysRequest extends Model
{
    /**
     * @description The ID of the ApsaraDB for Redis instance. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/60933.html) operation to query the instance ID.
     *
     * This parameter is required.
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the data shard on the ApsaraDB for Redis instance. You can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/190794.html) operation to query the data shard ID.
     *
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHotKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
