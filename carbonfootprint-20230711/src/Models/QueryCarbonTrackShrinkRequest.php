<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models;

use AlibabaCloud\Tea\Model;

class QueryCarbonTrackShrinkRequest extends Model
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
     * @description Whether to count the carbon emission details of multiple accounts. You can pass it in after opening the multi-account management. The default value and 0 is No and 1 is Yes.
     *
     * @example 0
     *
     * @var int
     */
    public $filterRDAccount;

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
     * @description After sorting in reverse order according to the data value of the return value, only the first TopNum data will be returned. If no data is passed, all data will be returned by default.
     *
     * @example 10
     *
     * @var int
     */
    public $topNum;

    /**
     * @description The list of Alibaba Cloud account IDs whose data needs to be queried.(used after enabling multi-account management).
     *
     * @var string
     */
    public $uidsShrink;

    /**
     * @description Whether the return result uses code as the identifier(0 meas not used and 1 means used). If not passed, the default code is used.
     *
     * For example, when the return result is to summarize carbon emissions according to the cloud product dimension, the identifier of ECS is "ecs" when 0 is passed, and "Elastic Compute Service" when 1 is passed.
     * @example 1
     *
     * @var int
     */
    public $useCode;
    protected $_name = [
        'endTime'         => 'EndTime',
        'filterRDAccount' => 'FilterRDAccount',
        'group'           => 'Group',
        'startTime'       => 'StartTime',
        'topNum'          => 'TopNum',
        'uidsShrink'      => 'Uids',
        'useCode'         => 'UseCode',
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
        if (null !== $this->filterRDAccount) {
            $res['FilterRDAccount'] = $this->filterRDAccount;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->topNum) {
            $res['TopNum'] = $this->topNum;
        }
        if (null !== $this->uidsShrink) {
            $res['Uids'] = $this->uidsShrink;
        }
        if (null !== $this->useCode) {
            $res['UseCode'] = $this->useCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCarbonTrackShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterRDAccount'])) {
            $model->filterRDAccount = $map['FilterRDAccount'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TopNum'])) {
            $model->topNum = $map['TopNum'];
        }
        if (isset($map['Uids'])) {
            $model->uidsShrink = $map['Uids'];
        }
        if (isset($map['UseCode'])) {
            $model->useCode = $map['UseCode'];
        }

        return $model;
    }
}
