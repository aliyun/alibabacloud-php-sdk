<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataByLayerResponseBody\qpsDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainQpsDataByLayerResponseBody extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The name of the ISP. You can call the DescribeDcdnRegionAndIsp operation to query the ISP name. If you do not specify a value for this parameter, all ISPs are queried.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The layers at which you want to query the QPS. The network layer supports IPv4 and IPv6. The application layer supports http, https, and quic. You can also set the value to all.
     *
     * Default value: all.
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDcdnDomainQpsDataByLayer**.
     *
     * @example all
     *
     * @var string
     */
    public $layer;

    /**
     * @description The name of the region. You can call the DescribeDcdnRegionAndIsp operation to query the region name. If you do not specify a value for this parameter, all regions are queried.
     *
     * @var qpsDataInterval
     */
    public $qpsDataInterval;

    /**
     * @description The timestamp of the data returned.
     *
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of requests.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'    => 'DataInterval',
        'domainName'      => 'DomainName',
        'endTime'         => 'EndTime',
        'layer'           => 'Layer',
        'qpsDataInterval' => 'QpsDataInterval',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->qpsDataInterval) {
            $res['QpsDataInterval'] = null !== $this->qpsDataInterval ? $this->qpsDataInterval->toMap() : null;
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
     * @return DescribeDcdnDomainQpsDataByLayerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['QpsDataInterval'])) {
            $model->qpsDataInterval = qpsDataInterval::fromMap($map['QpsDataInterval']);
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
