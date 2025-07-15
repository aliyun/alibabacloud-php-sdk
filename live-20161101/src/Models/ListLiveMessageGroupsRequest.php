<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupsRequest extends Model
{
    /**
     * @description The application ID.
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
     * @description The status of the groups to query. Default value: 0. Valid values:
     *
     *   0: all groups
     *   1: existing groups
     *   2: deleted groups
     *
     * @example 1
     *
     * @var int
     */
    public $groupStatus;

    /**
     * @description The starting page number for the query. If you leave this parameter empty, the query starts from the first page.
     *
     * @example 1001
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @description The sort order based on the time when the groups were created. Valid values:
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
        'groupStatus' => 'GroupStatus',
        'nextPageToken' => 'NextPageToken',
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
        if (null !== $this->groupStatus) {
            $res['GroupStatus'] = $this->groupStatus;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveMessageGroupsRequest
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
        if (isset($map['GroupStatus'])) {
            $model->groupStatus = $map['GroupStatus'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
