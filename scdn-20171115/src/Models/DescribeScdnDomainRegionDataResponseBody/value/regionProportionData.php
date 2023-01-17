<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRegionDataResponseBody\value;

use AlibabaCloud\Tea\Model;

class regionProportionData extends Model
{
    /**
     * @example 800019.0
     *
     * @var string
     */
    public $avgObjectSize;

    /**
     * @example 154.3345765545624
     *
     * @var string
     */
    public $avgResponseRate;

    /**
     * @example 5183.666666666667
     *
     * @var string
     */
    public $avgResponseTime;

    /**
     * @example 380.9614285714286
     *
     * @var string
     */
    public $bps;

    /**
     * @example 0.003544181046236794
     *
     * @var string
     */
    public $bytesProportion;

    /**
     * @example 0.01155980271270037
     *
     * @var string
     */
    public $proportion;

    /**
     * @example 5.9523809523809524E-5
     *
     * @var string
     */
    public $qps;

    /**
     * @var string
     */
    public $region;

    /**
     * @example " "
     *
     * @var string
     */
    public $regionEname;

    /**
     * @example 0
     *
     * @var string
     */
    public $reqErrRate;

    /**
     * @example 2400057
     *
     * @var string
     */
    public $totalBytes;

    /**
     * @example 3
     *
     * @var string
     */
    public $totalQuery;
    protected $_name = [
        'avgObjectSize'   => 'AvgObjectSize',
        'avgResponseRate' => 'AvgResponseRate',
        'avgResponseTime' => 'AvgResponseTime',
        'bps'             => 'Bps',
        'bytesProportion' => 'BytesProportion',
        'proportion'      => 'Proportion',
        'qps'             => 'Qps',
        'region'          => 'Region',
        'regionEname'     => 'RegionEname',
        'reqErrRate'      => 'ReqErrRate',
        'totalBytes'      => 'TotalBytes',
        'totalQuery'      => 'TotalQuery',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionEname) {
            $res['RegionEname'] = $this->regionEname;
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
     * @return regionProportionData
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
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionEname'])) {
            $model->regionEname = $map['RegionEname'];
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
