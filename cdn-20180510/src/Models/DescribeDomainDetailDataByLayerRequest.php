<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDetailDataByLayerRequest extends Model
{
    /**
     * @description The domain name that you want to query. You can specify multiple domain names and separate them with commas (,). You can specify up to 30 domain names in each call.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time. The maximum time range that can be specified is 1 hour.
     * @example 2020-07-05T22:05:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The metric that you want to query. You can specify one or more metrics and separate them with commas (,). Valid values: **bps**, **qps**, **traf**, **acc**, **ipv6\_traf**, **ipv6\_bps**, **ipv6\_acc**, **ipv6\_qps**, and **http_code**.
     *
     * @example bps,ipv6_traf,traf,http_code,qps
     *
     * @var string
     */
    public $field;

    /**
     * @description The name of the Internet service provider (ISP). You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query ISP names.
     *
     * If you do not specify an ISP, data of all ISPs is queried.
     * @example telecom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The protocol by which you want to query data. Valid values: **http**, **https**, **quic**, and **all**.
     *
     * Default value: **all**.
     * @example all
     *
     * @var string
     */
    public $layer;

    /**
     * @description The name of the region. You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query region names.
     *
     * If you do not specify a region, data in all regions is queried.
     * @example hangzhou
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-07-05T22:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'field'          => 'Field',
        'ispNameEn'      => 'IspNameEn',
        'layer'          => 'Layer',
        'locationNameEn' => 'LocationNameEn',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDetailDataByLayerRequest
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
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
