<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainMax95BpsDataResponseBody\detailData;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainMax95BpsDataResponseBody extends Model
{
    /**
     * @description Details of the 95th percentile bandwidth.
     *
     * @var detailData
     */
    public $detailData;

    /**
     * @description The domain name for CDN.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The 95th percentile bandwidth in the Chinese mainland.
     *
     * @example 16777590.28
     *
     * @var string
     */
    public $domesticMax95Bps;

    /**
     * @description The end of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     *
     * @example 2017-01-11T13:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The 95th percentile bandwidth.
     *
     * @example 16777590.28
     *
     * @var string
     */
    public $max95Bps;

    /**
     * @description The 95th percentile bandwidth outside the Chinese mainland.
     *
     * @example 0
     *
     * @var string
     */
    public $overseasMax95Bps;

    /**
     * @description The request ID.
     *
     * @example 25818875-5F78-4A*****F6-D7393642CA58
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'detailData' => 'DetailData',
        'domainName' => 'DomainName',
        'domesticMax95Bps' => 'DomesticMax95Bps',
        'endTime' => 'EndTime',
        'max95Bps' => 'Max95Bps',
        'overseasMax95Bps' => 'OverseasMax95Bps',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailData) {
            $res['DetailData'] = null !== $this->detailData ? $this->detailData->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domesticMax95Bps) {
            $res['DomesticMax95Bps'] = $this->domesticMax95Bps;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->max95Bps) {
            $res['Max95Bps'] = $this->max95Bps;
        }
        if (null !== $this->overseasMax95Bps) {
            $res['OverseasMax95Bps'] = $this->overseasMax95Bps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainMax95BpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailData'])) {
            $model->detailData = detailData::fromMap($map['DetailData']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomesticMax95Bps'])) {
            $model->domesticMax95Bps = $map['DomesticMax95Bps'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Max95Bps'])) {
            $model->max95Bps = $map['Max95Bps'];
        }
        if (isset($map['OverseasMax95Bps'])) {
            $model->overseasMax95Bps = $map['OverseasMax95Bps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
