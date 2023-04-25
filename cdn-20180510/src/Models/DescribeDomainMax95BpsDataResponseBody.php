<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataResponseBody\detailData;
use AlibabaCloud\Tea\Model;

class DescribeDomainMax95BpsDataResponseBody extends Model
{
    /**
     * @var detailData
     */
    public $detailData;

    /**
     * @description The accelerated domain name.
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
     * @description The end of the time range for which the data was queried.
     *
     * @example 2015-12-11T21:00:00Z
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
     * @description The ID of the request.
     *
     * @example 3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range for which the data was queried.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'detailData'       => 'DetailData',
        'domainName'       => 'DomainName',
        'domesticMax95Bps' => 'DomesticMax95Bps',
        'endTime'          => 'EndTime',
        'max95Bps'         => 'Max95Bps',
        'overseasMax95Bps' => 'OverseasMax95Bps',
        'requestId'        => 'RequestId',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
    }

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
     * @return DescribeDomainMax95BpsDataResponseBody
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
