<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults\pushResult\statusStatS;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults\pushResult\statusStatS\statusStat\regionIds;
use AlibabaCloud\Tea\Model;

class statusStat extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $regionIdCount;

    /**
     * @var regionIds
     */
    public $regionIds;
    protected $_name = [
        'status'        => 'Status',
        'regionIdCount' => 'RegionIdCount',
        'regionIds'     => 'RegionIds',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('regionIdCount', $this->regionIdCount, true);
        Model::validateRequired('regionIds', $this->regionIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->regionIdCount) {
            $res['RegionIdCount'] = $this->regionIdCount;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = null !== $this->regionIds ? $this->regionIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegionIdCount'])) {
            $model->regionIdCount = $map['RegionIdCount'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIds = regionIds::fromMap($map['RegionIds']);
        }

        return $model;
    }
}
