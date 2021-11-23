<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponseBody\appApiRelationInfos;
use AlibabaCloud\Tea\Model;

class DescribeApisByAppResponseBody extends Model
{
    /**
     * @var appApiRelationInfos
     */
    public $appApiRelationInfos;

    /**
     * @description 当前页码
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页条目
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总条目数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appApiRelationInfos' => 'AppApiRelationInfos',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appApiRelationInfos) {
            $res['AppApiRelationInfos'] = null !== $this->appApiRelationInfos ? $this->appApiRelationInfos->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisByAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppApiRelationInfos'])) {
            $model->appApiRelationInfos = appApiRelationInfos::fromMap($map['AppApiRelationInfos']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
