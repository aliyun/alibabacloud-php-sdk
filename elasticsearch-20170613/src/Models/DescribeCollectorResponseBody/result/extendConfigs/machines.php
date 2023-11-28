<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponseBody\result\extendConfigs;

use AlibabaCloud\Tea\Model;

class machines extends Model
{
    /**
     * @description The status of the shipper on the ECS instance. Valid values:
     *
     *   heartOk: The heartbeat is normal.
     *   heartLost: The heartbeat is abnormal.
     *   uninstalled: The shipper is not installed.
     *   failed: The shipper fails to be installed.
     *
     * @example heartOk
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description The IDs of the ECS instances.
     *
     * @example i-bp1gyhphjaj73jsr****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentStatus' => 'agentStatus',
        'instanceId'  => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['agentStatus'] = $this->agentStatus;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentStatus'])) {
            $model->agentStatus = $map['agentStatus'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
