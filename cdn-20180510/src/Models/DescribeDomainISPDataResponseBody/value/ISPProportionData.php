<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainISPDataResponseBody\value;

use AlibabaCloud\Tea\Model;

class ISPProportionData extends Model
{
    /**
     * @description The average response size. Unit: bytes.
     *
     * @example 7081884.7
     *
     * @var string
     */
    public $avgObjectSize;

    /**
     * @description The average response speed. Unit: byte/ms.
     *
     * @example 88.92594866772144
     *
     * @var string
     */
    public $avgResponseRate;

    /**
     * @description The average response time. Unit: milliseconds.
     *
     * @example 79638.0
     *
     * @var string
     */
    public $avgResponseTime;

    /**
     * @description The bandwidth.
     *
     * @example 1311.4601296296296
     *
     * @var string
     */
    public $bps;

    /**
     * @description The proportion of network traffic.
     *
     * @example 0.012220518530445479
     *
     * @var string
     */
    public $bytesProportion;

    /**
     * @description The information about the ISP.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The name of the ISP.
     *
     * @example alibaba
     *
     * @var string
     */
    public $ispEname;

    /**
     * @description The proportion of the HTTP status code.
     *
     * @example 0.004509176173513099
     *
     * @var string
     */
    public $proportion;

    /**
     * @description The QPS.
     *
     * @example 2.3148148148148147E-5
     *
     * @var string
     */
    public $qps;

    /**
     * @description The request error rate.
     *
     * @example 0.0
     *
     * @var string
     */
    public $reqErrRate;

    /**
     * @description The total volume of traffic.
     *
     * @example 7081884
     *
     * @var string
     */
    public $totalBytes;

    /**
     * @description The total number of requests.
     *
     * @example 1
     *
     * @var string
     */
    public $totalQuery;
    protected $_name = [
        'avgObjectSize' => 'AvgObjectSize',
        'avgResponseRate' => 'AvgResponseRate',
        'avgResponseTime' => 'AvgResponseTime',
        'bps' => 'Bps',
        'bytesProportion' => 'BytesProportion',
        'ISP' => 'ISP',
        'ispEname' => 'IspEname',
        'proportion' => 'Proportion',
        'qps' => 'Qps',
        'reqErrRate' => 'ReqErrRate',
        'totalBytes' => 'TotalBytes',
        'totalQuery' => 'TotalQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgObjectSize) {
            $res['AvgObjectSize'] = $this->avgObjectSize;
        }
        if (null !== $this->avgResponseRate) {
            $res['AvgResponseRate'] = $this->avgResponseRate;
        }
        if (null !== $this->avgResponseTime) {
            $res['AvgResponseTime'] = $this->avgResponseTime;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->bytesProportion) {
            $res['BytesProportion'] = $this->bytesProportion;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->ispEname) {
            $res['IspEname'] = $this->ispEname;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->reqErrRate) {
            $res['ReqErrRate'] = $this->reqErrRate;
        }
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }
        if (null !== $this->totalQuery) {
            $res['TotalQuery'] = $this->totalQuery;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ISPProportionData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgObjectSize'])) {
            $model->avgObjectSize = $map['AvgObjectSize'];
        }
        if (isset($map['AvgResponseRate'])) {
            $model->avgResponseRate = $map['AvgResponseRate'];
        }
        if (isset($map['AvgResponseTime'])) {
            $model->avgResponseTime = $map['AvgResponseTime'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['BytesProportion'])) {
            $model->bytesProportion = $map['BytesProportion'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['IspEname'])) {
            $model->ispEname = $map['IspEname'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['ReqErrRate'])) {
            $model->reqErrRate = $map['ReqErrRate'];
        }
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }
        if (isset($map['TotalQuery'])) {
            $model->totalQuery = $map['TotalQuery'];
        }

        return $model;
    }
}
