<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamPushMetricDetailDataResponseBody\streamDetailData;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamPushMetricDetailDataResponseBody extends Model
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
     * @description The end of the time range that was queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-09-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description A pagination token. When you call this operation, up to 5,000 rows of data can be returned per query. If the number of rows exceeds 5,000, the response includes a pagination token that is used in the next request to retrieve a new page of results.
     *
     * When you specify the token in the next query, data continues to be obtained from the end of the previous query.
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
     * @example 5EBF2AC3-4B73-40A5-8B32-83F49D5F035E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range that was queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-09-10T20:00:00Z
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
     * @return DescribeLiveStreamPushMetricDetailDataResponseBody
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
