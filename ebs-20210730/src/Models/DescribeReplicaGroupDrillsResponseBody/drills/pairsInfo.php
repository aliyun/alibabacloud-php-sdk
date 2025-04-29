<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponseBody\drills;

use AlibabaCloud\Dara\Model;

class pairsInfo extends Model
{
    /**
     * @var string
     */
    public $drillDiskId;

    /**
     * @var string
     */
    public $drillDiskStatus;

    /**
     * @var string
     */
    public $pairId;
    protected $_name = [
        'drillDiskId' => 'DrillDiskId',
        'drillDiskStatus' => 'DrillDiskStatus',
        'pairId' => 'PairId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drillDiskId) {
            $res['DrillDiskId'] = $this->drillDiskId;
        }

        if (null !== $this->drillDiskStatus) {
            $res['DrillDiskStatus'] = $this->drillDiskStatus;
        }

        if (null !== $this->pairId) {
            $res['PairId'] = $this->pairId;
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
        if (isset($map['DrillDiskId'])) {
            $model->drillDiskId = $map['DrillDiskId'];
        }

        if (isset($map['DrillDiskStatus'])) {
            $model->drillDiskStatus = $map['DrillDiskStatus'];
        }

        if (isset($map['PairId'])) {
            $model->pairId = $map['PairId'];
        }

        return $model;
    }
}
