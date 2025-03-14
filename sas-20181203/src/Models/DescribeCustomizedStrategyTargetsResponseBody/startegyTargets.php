<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizedStrategyTargetsResponseBody;

use AlibabaCloud\Tea\Model;

class startegyTargets extends Model
{
    /**
     * @description The ID of the server group.
     *
     * >  You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of server groups.
     *
     * @example 14590457
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 1884
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the baseline check policy.
     *
     * @example win
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The UUID of the server.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     *
     * @example 2701ad2e-0e8f-428c-8812-ebb2686e****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'groupId' => 'GroupId',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return startegyTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
