<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupUsersRequest extends Model
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
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

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
     * @description The sort order based on the time when the users joined the group. Valid values:
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
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
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
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
     * @return ListLiveMessageGroupUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
