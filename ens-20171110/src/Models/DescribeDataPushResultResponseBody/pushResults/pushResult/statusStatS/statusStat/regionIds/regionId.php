<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponseBody\pushResults\pushResult\statusStatS\statusStat\regionIds;

use AlibabaCloud\Tea\Model;

class regionId extends Model
{
    /**
     * @description The ID of the ENS node.
     *
     * @example cn-wuxi-5
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The start time of the push operation. The time is displayed in UTC.
     *
     * @example 2021-12-28T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The description of the status.
     *
     * @example Success
     *
     * @var string
     */
    public $statusDescrip;

    /**
     * @description The time when the status was last updated. The time is displayed in UTC.
     *
     * @example 2021-12-07T02:37:10Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'regionId'      => 'RegionId',
        'startTime'     => 'StartTime',
        'statusDescrip' => 'StatusDescrip',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusDescrip) {
            $res['StatusDescrip'] = $this->statusDescrip;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusDescrip'])) {
            $model->statusDescrip = $map['StatusDescrip'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
