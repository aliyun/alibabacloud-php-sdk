<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class QueryMessageAppRequest extends Model
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
     * @description The name of the interactive messaging application.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The number of the page to return. Default value: 1. Valid values: 1 to 100000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of applications to return on each page. Default value: 20. Valid values: 1 to 50.
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
        'appName' => 'AppName',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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
     * @return QueryMessageAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
