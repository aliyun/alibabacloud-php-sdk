<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponseBody\value;

use AlibabaCloud\Tea\Model;

class ispProportionData extends Model
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
     * @var string
     */
    public $isp;

    /**
     * @example unicom
     *
     * @var string
     */
    public $ispEname;

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
        'isp'             => 'Isp',
        'ispEname'        => 'IspEname',
        'proportion'      => 'Proportion',
        'qps'             => 'Qps',
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
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
     * @return ispProportionData
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
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
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
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }
        if (isset($map['TotalQuery'])) {
            $model->totalQuery = $map['TotalQuery'];
        }

        return $model;
    }
}
