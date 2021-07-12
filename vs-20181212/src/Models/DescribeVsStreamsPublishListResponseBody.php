<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponseBody\publishInfo;
use AlibabaCloud\Tea\Model;

class DescribeVsStreamsPublishListResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var publishInfo
     */
    public $publishInfo;
    protected $_name = [
        'totalPage'   => 'TotalPage',
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalNum'    => 'TotalNum',
        'publishInfo' => 'PublishInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->publishInfo) {
            $res['PublishInfo'] = null !== $this->publishInfo ? $this->publishInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsStreamsPublishListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['PublishInfo'])) {
            $model->publishInfo = publishInfo::fromMap($map['PublishInfo']);
        }

        return $model;
    }
}
