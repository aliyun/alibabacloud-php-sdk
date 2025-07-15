<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListMessageGroupUserRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the message group.
     *
     * This parameter is required.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * Valid values: 1 to 100000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of members to return on each page. Default value: 20.
     *
     * Valid values: 1 to 50.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sort order. Valid values:
     *
     *   0: ascending order by time
     *   1: descending order by time
     *
     * @example 1
     *
     * @var int
     */
    public $sortType;
    protected $_name = [
        'appId' => 'AppId',
        'groupId' => 'GroupId',
        'pageNum' => 'PageNum',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
     * @return ListMessageGroupUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
