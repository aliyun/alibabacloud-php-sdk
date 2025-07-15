<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveMessageGroupByPageRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
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
     * @description The page number. Valid values: [1,10000].
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:[1,50].
     *
     * Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

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
        'pageNumber' => 'PageNumber',
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
        if (null !== $this->groupStatus) {
            $res['GroupStatus'] = $this->groupStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return ListLiveMessageGroupByPageRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
