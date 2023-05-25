<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls;
use AlibabaCloud\Tea\Model;

class DescribeTrafficControlsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The returned throttling policy information. It is an array consisting of TrafficControl data.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 93D91A99-F093-4596-87BA-3C4FBFD3FD8A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The default throttling value for each user.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The default throttling value for each API.
     *
     * @var trafficControls
     */
    public $trafficControls;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'trafficControls' => 'TrafficControls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->trafficControls) {
            $res['TrafficControls'] = null !== $this->trafficControls ? $this->trafficControls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficControlsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TrafficControls'])) {
            $model->trafficControls = trafficControls::fromMap($map['TrafficControls']);
        }

        return $model;
    }
}
