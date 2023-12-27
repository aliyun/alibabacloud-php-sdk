<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSwitchLogResponseBody;

use AlibabaCloud\Tea\Model;

class logItems extends Model
{
    /**
     * @description The ID of the replica set instance or the ID of the node on which a primary/secondary switchover is performed.
     *
     * @example dds-uf68f1b5a57exxxx
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The code that indicates the reason of a primary/secondary switchover. Valid values:
     *
     *   USER_CONSOLE_OPERATION: The switchover is manually performed.
     *   OPERATION_AND_MAINTENANCE: Potential risks exist.
     *   MACHINE_DOWNTIME: The host is offline.
     *   PRIMARY_UNHEALTHY: An exception occurs on the primary node of the instance.
     *   SECONDARY_UNHEALTHY: An exception occurs on the secondary node of the instance.
     *   MULTIPLE_NODE_FAILURES: An exception occurs on multiple nodes of the instance.
     *
     * @example USER_CONSOLE_OPERATION
     *
     * @var string
     */
    public $switchCode;

    /**
     * @description The switchover status. Valid values: **1** and **0**. The value 1 indicates a successful primary/secondary switchover and the value 0 indicates a failed primary/secondary switchover.
     *
     * @example 1
     *
     * @var string
     */
    public $switchStatus;

    /**
     * @description The point in time when a primary/secondary switchover was performed. The time follows the ISO 8601 standard in the *yyyy-mm-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-02-07T18:00:00Z
     *
     * @var string
     */
    public $switchTime;
    protected $_name = [
        'nodeId'       => 'NodeId',
        'switchCode'   => 'SwitchCode',
        'switchStatus' => 'SwitchStatus',
        'switchTime'   => 'SwitchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->switchCode) {
            $res['SwitchCode'] = $this->switchCode;
        }
        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SwitchCode'])) {
            $model->switchCode = $map['SwitchCode'];
        }
        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        return $model;
    }
}
