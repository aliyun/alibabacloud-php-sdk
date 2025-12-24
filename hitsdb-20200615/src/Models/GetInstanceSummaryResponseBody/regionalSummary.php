<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class regionalSummary extends Model
{
    /**
     * @var int
     */
    public $lockingCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'lockingCount' => 'LockingCount',
        'regionId' => 'RegionId',
        'runningCount' => 'RunningCount',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockingCount) {
            $res['LockingCount'] = $this->lockingCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['LockingCount'])) {
            $model->lockingCount = $map['LockingCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
