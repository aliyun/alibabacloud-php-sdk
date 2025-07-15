<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListEventSubEventRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     *
     * @example 1698201013
     *
     * @var int
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
     * @description The number of callback records to return on each page. Valid values: 1 to 100.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     *
     * @example 1698195600
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The subscription ID. You can obtain the ID from the response to the [CreateEventSub](https://help.aliyun.com/document_detail/2848209.html) operation.
     *
     * @example ad53276431c****
     *
     * @var string
     */
    public $subscribeId;
    protected $_name = [
        'appId' => 'AppId',
        'endTime' => 'EndTime',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'subscribeId' => 'SubscribeId',
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
        if (null !== $this->subscribeId) {
            $res['SubscribeId'] = $this->subscribeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventSubEventRequest
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
        if (isset($map['SubscribeId'])) {
            $model->subscribeId = $map['SubscribeId'];
        }

        return $model;
    }
}
