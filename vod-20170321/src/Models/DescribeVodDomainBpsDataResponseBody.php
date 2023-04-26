<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponseBody\bpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainBpsDataResponseBody extends Model
{
    /**
     * @description The name of the ISP. By default, the data of all ISPs is returned.
     *
     * @var bpsDataPerInterval
     */
    public $bpsDataPerInterval;

    /**
     * @description The HTTPS bandwidth on L1 nodes in mainland China. Unit: bit/s. When the bandwidth data is queried by ISP, no value is returned.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The time interval between the returned entries. Unit: seconds.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 2015-12-10T14:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the time range in which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The query interval. Unit: seconds. Valid values: **300**, **3600**, and **86400**.
     *
     *   If the time range to query is less than 3 days, valid values are **300**, **3600**, and **86400**. The default value is 300.
     *   If the time range to query is from 3 to less than 31 days, valid values are **3600** and **86400**. The default value is 3600.
     *   If the time range to query is from 31 to 90 days, the valid value is **86400**.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The name of the region. By default, the data in all regions is returned.
     *
     * @example 3C6CCEC4-6B88-4D4A-****-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The domain name to be queried. If you do not specify this parameter, the merged data of all your domain names for CDN is returned. You can specify multiple domain names. Separate them with commas (,).
     *
     * @example 2015-12-10T13:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bpsDataPerInterval' => 'BpsDataPerInterval',
        'dataInterval'       => 'DataInterval',
        'domainName'         => 'DomainName',
        'endTime'            => 'EndTime',
        'ispNameEn'          => 'IspNameEn',
        'locationNameEn'     => 'LocationNameEn',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDataPerInterval) {
            $res['BpsDataPerInterval'] = null !== $this->bpsDataPerInterval ? $this->bpsDataPerInterval->toMap() : null;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
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
     * @return DescribeVodDomainBpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDataPerInterval'])) {
            $model->bpsDataPerInterval = bpsDataPerInterval::fromMap($map['BpsDataPerInterval']);
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
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
