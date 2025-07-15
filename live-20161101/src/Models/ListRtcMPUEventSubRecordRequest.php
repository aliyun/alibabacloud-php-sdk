<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListRtcMPUEventSubRecordRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * >  The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * This parameter is required.
     *
     * @example 1970-01-01T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * This parameter is required.
     *
     * @example 1970-01-01T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the subscription.
     *
     * @example yourSubId
     *
     * @var string
     */
    public $subId;
    protected $_name = [
        'appId' => 'AppId',
        'endTime' => 'EndTime',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'subId' => 'SubId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRtcMPUEventSubRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        return $model;
    }
}
