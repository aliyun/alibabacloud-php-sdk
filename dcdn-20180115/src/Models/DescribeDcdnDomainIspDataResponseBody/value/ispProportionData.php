<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponseBody\value;

use AlibabaCloud\Tea\Model;

class ispProportionData extends Model
{
    /**
     * @var string
     */
    public $qps;

    /**
     * @var string
     */
    public $totalQuery;

    /**
     * @var string
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $avgResponseRate;

    /**
     * @var string
     */
    public $avgResponseTime;

    /**
     * @var string
     */
    public $proportion;

    /**
     * @var string
     */
    public $avgObjectSize;

    /**
     * @var string
     */
    public $ispEname;

    /**
     * @var string
     */
    public $bps;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $bytesProportion;
    protected $_name = [
        'qps'             => 'Qps',
        'totalQuery'      => 'TotalQuery',
        'totalBytes'      => 'TotalBytes',
        'avgResponseRate' => 'AvgResponseRate',
        'avgResponseTime' => 'AvgResponseTime',
        'proportion'      => 'Proportion',
        'avgObjectSize'   => 'AvgObjectSize',
        'ispEname'        => 'IspEname',
        'bps'             => 'Bps',
        'isp'             => 'Isp',
        'bytesProportion' => 'BytesProportion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->totalQuery) {
            $res['TotalQuery'] = $this->totalQuery;
        }
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }
        if (null !== $this->avgResponseRate) {
            $res['AvgResponseRate'] = $this->avgResponseRate;
        }
        if (null !== $this->avgResponseTime) {
            $res['AvgResponseTime'] = $this->avgResponseTime;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->avgObjectSize) {
            $res['AvgObjectSize'] = $this->avgObjectSize;
        }
        if (null !== $this->ispEname) {
            $res['IspEname'] = $this->ispEname;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->bytesProportion) {
            $res['BytesProportion'] = $this->bytesProportion;
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
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['TotalQuery'])) {
            $model->totalQuery = $map['TotalQuery'];
        }
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }
        if (isset($map['AvgResponseRate'])) {
            $model->avgResponseRate = $map['AvgResponseRate'];
        }
        if (isset($map['AvgResponseTime'])) {
            $model->avgResponseTime = $map['AvgResponseTime'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['AvgObjectSize'])) {
            $model->avgObjectSize = $map['AvgObjectSize'];
        }
        if (isset($map['IspEname'])) {
            $model->ispEname = $map['IspEname'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['BytesProportion'])) {
            $model->bytesProportion = $map['BytesProportion'];
        }

        return $model;
    }
}
