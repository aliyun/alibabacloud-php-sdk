<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Dara\Model;

class replicationProgress extends Model
{
    /**
     * @var int
     */
    public $historicalReplicationProgress;

    /**
     * @var int
     */
    public $newReplicationProgress;
    protected $_name = [
        'historicalReplicationProgress' => 'HistoricalReplicationProgress',
        'newReplicationProgress' => 'NewReplicationProgress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
