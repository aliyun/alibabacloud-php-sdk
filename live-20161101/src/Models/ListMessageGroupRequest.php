<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListMessageGroupRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of the page to return. Default value: 1. Valid values: 1 to 100000.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of message groups to return on each page. Default value: 20.
     *
     * Valid values: 1 to 50.
     *
     * This parameter is required.
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

    /**
     * @description The ID of the user. Each user has a unique ID in the application. You can specify multiple user IDs.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'sortType' => 'SortType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessageGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
