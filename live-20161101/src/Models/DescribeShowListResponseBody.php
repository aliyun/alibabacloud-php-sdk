<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo;
use AlibabaCloud\Tea\Model;

class DescribeShowListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $showList;

    /**
     * @var showListInfo
     */
    public $showListInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'showList'     => 'ShowList',
        'showListInfo' => 'ShowListInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showList) {
            $res['ShowList'] = $this->showList;
        }
        if (null !== $this->showListInfo) {
            $res['ShowListInfo'] = null !== $this->showListInfo ? $this->showListInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeShowListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowList'])) {
            $model->showList = $map['ShowList'];
        }
        if (isset($map['ShowListInfo'])) {
            $model->showListInfo = showListInfo::fromMap($map['ShowListInfo']);
        }

        return $model;
    }
}
