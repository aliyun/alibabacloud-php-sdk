<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupMessagesRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application to query.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds. If you leave this parameter empty, the earliest available time is used.
     *
     * @example 1697783235
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds. If you leave this parameter empty, the latest available time is used.
     *
     * @example 1698301635
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the group to query.
     *
     * This parameter is required.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The type of messages that you want to query. If you leave this parameter empty, all types of messages are queried.
     *
     * @example 1
     *
     * @var int
     */
    public $msgType;

    /**
     * @description The starting page number for the query. If you leave this parameter empty, the query starts from the first page.
     *
     * @example 1
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @description The number of entries per page. Valid values: **10 to 50**.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sort order based on the time when the messages were sent. Valid values:
     *
     *   1: ascending order
     *   2: descending order
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $sortType;
    protected $_name = [
        'appId' => 'AppId',
        'beginTime' => 'BeginTime',
        'dataCenter' => 'DataCenter',
        'endTime' => 'EndTime',
        'groupId' => 'GroupId',
        'msgType' => 'MsgType',
        'nextPageToken' => 'NextPageToken',
        'pageSize' => 'PageSize',
        'sortType' => 'SortType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveMessageGroupMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
