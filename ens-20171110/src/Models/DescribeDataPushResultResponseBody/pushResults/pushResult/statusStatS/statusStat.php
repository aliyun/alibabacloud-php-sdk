<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS\statusStat\regionIds;

class statusStat extends Model
{
    /**
     * @var int
     */
    public $regionIdCount;

    /**
     * @var regionIds
     */
    public $regionIds;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'regionIdCount' => 'RegionIdCount',
        'regionIds' => 'RegionIds',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->regionIds) {
            $this->regionIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionIdCount) {
            $res['RegionIdCount'] = $this->regionIdCount;
        }

        if (null !== $this->regionIds) {
            $res['RegionIds'] = null !== $this->regionIds ? $this->regionIds->toArray($noStream) : $this->regionIds;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['RegionIdCount'])) {
            $model->regionIdCount = $map['RegionIdCount'];
        }

        if (isset($map['RegionIds'])) {
            $model->regionIds = regionIds::fromMap($map['RegionIds']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
