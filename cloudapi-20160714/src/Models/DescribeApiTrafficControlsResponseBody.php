<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponseBody\apiTrafficControls;
use AlibabaCloud\Tea\Model;

class DescribeApiTrafficControlsResponseBody extends Model
{
    /**
     * @description The ID of the API.
     *
     * @var apiTrafficControls
     */
    public $apiTrafficControls;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The returned throttling policy information. It is an array consisting of ApiTrafficControlItem data.
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
     * @description The binding time of the throttling policy.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiTrafficControls' => 'ApiTrafficControls',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiTrafficControls) {
            $res['ApiTrafficControls'] = null !== $this->apiTrafficControls ? $this->apiTrafficControls->toMap() : null;
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
     * @return DescribeApiTrafficControlsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiTrafficControls'])) {
            $model->apiTrafficControls = apiTrafficControls::fromMap($map['ApiTrafficControls']);
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
