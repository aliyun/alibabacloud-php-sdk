<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlResponseBody\apiInfos;
use AlibabaCloud\Tea\Model;

class DescribeApisByTrafficControlResponseBody extends Model
{
    /**
     * @description Indicates whether the API is public. Valid values:
     *
     *   **PUBLIC**
     *   **PRIVATE**
     *
     * @var apiInfos
     */
    public $apiInfos;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The returned API information. It is an array consisting of ApiInfo data.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The binding time of the API.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiInfos'   => 'ApiInfos',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiInfos) {
            $res['ApiInfos'] = null !== $this->apiInfos ? $this->apiInfos->toMap() : null;
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
     * @return DescribeApisByTrafficControlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiInfos'])) {
            $model->apiInfos = apiInfos::fromMap($map['ApiInfos']);
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
