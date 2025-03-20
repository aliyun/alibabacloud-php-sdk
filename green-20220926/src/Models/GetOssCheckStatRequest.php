<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetOssCheckStatRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $byMonth;

    /**
     * @example 2023-08-24 10:01:55
     *
     * @var string
     */
    public $endDate;

    /**
     * @example P_UNHBH
     *
     * @var string
     */
    public $parentTaskId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2023-08-11 09:00:19
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'byMonth' => 'ByMonth',
        'endDate' => 'EndDate',
        'parentTaskId' => 'ParentTaskId',
        'regionId' => 'RegionId',
        'startDate' => 'StartDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->byMonth) {
            $res['ByMonth'] = $this->byMonth;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssCheckStatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByMonth'])) {
            $model->byMonth = $map['ByMonth'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
