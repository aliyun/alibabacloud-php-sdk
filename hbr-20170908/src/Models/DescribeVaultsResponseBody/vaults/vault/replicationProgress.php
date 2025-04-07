<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Tea\Model;

class replicationProgress extends Model
{
    /**
     * @description The progress of historical data synchronization from the backup vault to the mirror vault. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var int
     */
    public $historicalReplicationProgress;

    /**
     * @description The latest synchronization time of incremental data in the mirror vault.
     *
     * @example 1579413159
     *
     * @var int
     */
    public $newReplicationProgress;
    protected $_name = [
        'historicalReplicationProgress' => 'HistoricalReplicationProgress',
        'newReplicationProgress' => 'NewReplicationProgress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->historicalReplicationProgress) {
            $res['HistoricalReplicationProgress'] = $this->historicalReplicationProgress;
        }
        if (null !== $this->newReplicationProgress) {
            $res['NewReplicationProgress'] = $this->newReplicationProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoricalReplicationProgress'])) {
            $model->historicalReplicationProgress = $map['HistoricalReplicationProgress'];
        }
        if (isset($map['NewReplicationProgress'])) {
            $model->newReplicationProgress = $map['NewReplicationProgress'];
        }

        return $model;
    }
}
