<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMetricDetailDataResponseBody\streamDetailData;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamMetricDetailDataResponseBody extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The token that determines the start point of the next query. This parameter is returned if more data results are available.
     *
     * @example UjsM9x3aVcJi9a0-ArwJUTTC67C***37C0=
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The number of rows returned.
     *
     * @example 5000
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example B955107D-E658-4E77-B913-E0AC3D31693E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The data array returned.
     *
     * @var streamDetailData
     */
    public $streamDetailData;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'nextPageToken' => 'NextPageToken',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'streamDetailData' => 'StreamDetailData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamDetailData) {
            $res['StreamDetailData'] = null !== $this->streamDetailData ? $this->streamDetailData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamMetricDetailDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamDetailData'])) {
            $model->streamDetailData = streamDetailData::fromMap($map['StreamDetailData']);
        }

        return $model;
    }
}
