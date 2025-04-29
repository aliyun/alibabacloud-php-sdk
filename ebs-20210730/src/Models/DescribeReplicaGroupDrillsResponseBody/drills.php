<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponseBody\drills\pairsInfo;

class drills extends Model
{
    /**
     * @var string
     */
    public $drillId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var pairsInfo[]
     */
    public $pairsInfo;

    /**
     * @var int
     */
    public $recoverPoint;

    /**
     * @var int
     */
    public $startAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'drillId' => 'DrillId',
        'groupId' => 'GroupId',
        'pairsInfo' => 'PairsInfo',
        'recoverPoint' => 'RecoverPoint',
        'startAt' => 'StartAt',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
        if (\is_array($this->pairsInfo)) {
            Model::validateArray($this->pairsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->pairsInfo) {
            if (\is_array($this->pairsInfo)) {
                $res['PairsInfo'] = [];
                $n1 = 0;
                foreach ($this->pairsInfo as $item1) {
                    $res['PairsInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PairsInfo'] as $item1) {
                    $model->pairsInfo[$n1++] = pairsInfo::fromMap($item1);
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
