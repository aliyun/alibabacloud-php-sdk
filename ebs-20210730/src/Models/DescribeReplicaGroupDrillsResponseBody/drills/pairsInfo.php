<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponseBody\drills;

use AlibabaCloud\Tea\Model;

class pairsInfo extends Model
{
    /**
     * @description The ID of the drill disk.
     *
     * @example d-xxx
     *
     * @var string
     */
    public $drillDiskId;

    /**
     * @description The status of the drill disk. Valid values:
     *
     *   created
     *   deleted
     *   creating
     *   deleting
     *
     * >  This parameter can also display error code details if your drill disk fails to be created or deleted.
     * @example created
     *
     * @var string
     */
    public $drillDiskStatus;

    /**
     * @description The ID of the replication pair.
     *
     * @example pair-xxx
     *
     * @var string
     */
    public $pairId;
    protected $_name = [
        'drillDiskId'     => 'DrillDiskId',
        'drillDiskStatus' => 'DrillDiskStatus',
        'pairId'          => 'PairId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return pairsInfo
     */
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
