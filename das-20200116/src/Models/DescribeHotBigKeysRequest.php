<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeHotBigKeysRequest extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The ID of the ApsaraDB for Redis instance. You can call the [DescribeInstances](~~60933~~) operation to query the ID.
     *
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the data shard on the ApsaraDB for Redis instance. You can call the [DescribeRoleZoneInfo](~~190794~~) operation to query the ID.
     *
     * @example r-****-db-0
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceId'     => 'InstanceId',
        'nodeId'         => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
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
     * @return DescribeHotBigKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
