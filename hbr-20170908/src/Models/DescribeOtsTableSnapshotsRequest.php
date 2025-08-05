<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeOtsTableSnapshotsRequest\otsInstances;

class DescribeOtsTableSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @var string
     */
    public $crossAccountType;

    /**
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var otsInstances[]
     */
    public $otsInstances;

    /**
     * @var string[]
     */
    public $snapshotIds;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'endTime' => 'EndTime',
        'limit' => 'Limit',
        'nextToken' => 'NextToken',
        'otsInstances' => 'OtsInstances',
        'snapshotIds' => 'SnapshotIds',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->otsInstances)) {
            Model::validateArray($this->otsInstances);
        }
        if (\is_array($this->snapshotIds)) {
            Model::validateArray($this->snapshotIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->otsInstances) {
            if (\is_array($this->otsInstances)) {
                $res['OtsInstances'] = [];
                $n1 = 0;
                foreach ($this->otsInstances as $item1) {
                    $res['OtsInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->snapshotIds) {
            if (\is_array($this->snapshotIds)) {
                $res['SnapshotIds'] = [];
                $n1 = 0;
                foreach ($this->snapshotIds as $item1) {
                    $res['SnapshotIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OtsInstances'])) {
            if (!empty($map['OtsInstances'])) {
                $model->otsInstances = [];
                $n1 = 0;
                foreach ($map['OtsInstances'] as $item1) {
                    $model->otsInstances[$n1] = otsInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SnapshotIds'])) {
            if (!empty($map['SnapshotIds'])) {
                $model->snapshotIds = [];
                $n1 = 0;
                foreach ($map['SnapshotIds'] as $item1) {
                    $model->snapshotIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
