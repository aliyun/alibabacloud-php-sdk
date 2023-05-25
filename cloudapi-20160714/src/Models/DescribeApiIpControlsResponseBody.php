<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponseBody\apiIpControls;
use AlibabaCloud\Tea\Model;

class DescribeApiIpControlsResponseBody extends Model
{
    /**
     * @description The ID of the API.
     *
     * @var apiIpControls
     */
    public $apiIpControls;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The information about the ACLs. The information is an array of ApiIpControlItem data.
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
     * @description The time of binding.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiIpControls' => 'ApiIpControls',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiIpControls) {
            $res['ApiIpControls'] = null !== $this->apiIpControls ? $this->apiIpControls->toMap() : null;
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
     * @return DescribeApiIpControlsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiIpControls'])) {
            $model->apiIpControls = apiIpControls::fromMap($map['ApiIpControls']);
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
