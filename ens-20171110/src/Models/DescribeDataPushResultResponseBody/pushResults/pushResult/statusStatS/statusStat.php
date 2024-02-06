<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS\statusStat\regionIds;
use AlibabaCloud\Tea\Model;

class statusStat extends Model
{
    /**
     * @description The total number of ENS nodes.
     *
     * @example 2
     *
     * @var int
     */
    public $regionIdCount;

    /**
     * @description The push status of data files on the ENS node.
     *
     * @var regionIds
     */
    public $regionIds;

    /**
     * @description The push status. The value is of the enumeration type. Valid values: SUCCESS FAILED PUSHING
     *
     * @example FAILED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'regionIdCount' => 'RegionIdCount',
        'regionIds'     => 'RegionIds',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionIdCount) {
            $res['RegionIdCount'] = $this->regionIdCount;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = null !== $this->regionIds ? $this->regionIds->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
