<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponseBody\drills\pairsInfo;
use AlibabaCloud\Tea\Model;

class drills extends Model
{
    /**
     * @description The ID of the drill.
     *
     * @example pg-drill-xxx
     *
     * @var string
     */
    public $drillId;

    /**
     * @description The ID of the replication pair-consistent group.
     *
     * @example pg-xxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The information of replication pairs.
     *
     * @var pairsInfo[]
     */
    public $pairsInfo;

    /**
     * @description The recovery point of the drill. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1691114995
     *
     * @var int
     */
    public $recoverPoint;

    /**
     * @description The beginning time of the drill. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1649750977
     *
     * @var int
     */
    public $startAt;

    /**
     * @description The status of the drill. Valid values:
     *
     *   execute_failed
     *   executed
     *   executing
     *   clear_failed
     *   clearing
     *
     * @example executed
     *
     * @var string
     */
    public $status;

    /**
     * @description The error message that appears if the drill fails to be executed.
     *
     * @example GROUP_SYNCPOINT_NOT_FOUND
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'drillId'       => 'DrillId',
        'groupId'       => 'GroupId',
        'pairsInfo'     => 'PairsInfo',
        'recoverPoint'  => 'RecoverPoint',
        'startAt'       => 'StartAt',
        'status'        => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pairsInfo) {
            $res['PairsInfo'] = [];
            if (null !== $this->pairsInfo && \is_array($this->pairsInfo)) {
                $n = 0;
                foreach ($this->pairsInfo as $item) {
                    $res['PairsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recoverPoint) {
            $res['RecoverPoint'] = $this->recoverPoint;
        }
        if (null !== $this->startAt) {
            $res['StartAt'] = $this->startAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drills
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PairsInfo'])) {
            if (!empty($map['PairsInfo'])) {
                $model->pairsInfo = [];
                $n                = 0;
                foreach ($map['PairsInfo'] as $item) {
                    $model->pairsInfo[$n++] = null !== $item ? pairsInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RecoverPoint'])) {
            $model->recoverPoint = $map['RecoverPoint'];
        }
        if (isset($map['StartAt'])) {
            $model->startAt = $map['StartAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
