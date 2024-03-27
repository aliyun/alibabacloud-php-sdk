<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models;

use AlibabaCloud\Tea\Model;

class GetSummaryDataShrinkRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format. Example: 2023-02-01 23:59:59.
     *
     * @example 2023-02-01 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The statistical dimension. A value of productCode specifies that statistics are collected based on cloud service. A value of region specifies that statistics are collected based on region. A value of subUid specifies that statistics are collected based on Resource Access Management (RAM) user. If you do not specify this parameter, statistics are collected based on Alibaba Cloud account.
     *
     * @example productCode
     *
     * @var string
     */
    public $group;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format. Example: 2023-01-01 00:00:00.
     *
     * @example 2023-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The list of Alibaba Cloud account IDs whose data needs to be queried.(used after enabling multi-account management).
     *
     * @var string
     */
    public $uidsShrink;
    protected $_name = [
        'endTime'    => 'EndTime',
        'group'      => 'Group',
        'startTime'  => 'StartTime',
        'uidsShrink' => 'Uids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->uidsShrink) {
            $res['Uids'] = $this->uidsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSummaryDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Uids'])) {
            $model->uidsShrink = $map['Uids'];
        }

        return $model;
    }
}
