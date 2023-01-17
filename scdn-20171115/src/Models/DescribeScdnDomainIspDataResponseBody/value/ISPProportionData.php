<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainIspDataResponseBody\value;

use AlibabaCloud\Tea\Model;

class ISPProportionData extends Model
{
    /**
     * @example 2888253.7875
     *
     * @var string
     */
    public $avgObjectSize;

    /**
     * @example 787.8073097249128
     *
     * @var string
     */
    public $avgResponseRate;

    /**
     * @example 3666.193181818182
     *
     * @var string
     */
    public $avgResponseTime;

    /**
     * @example 40343.86242857143
     *
     * @var string
     */
    public $bps;

    /**
     * @example 0.37532921137846464
     *
     * @var string
     */
    public $bytesProportion;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @example China Mobile
     *
     * @var string
     */
    public $ispEname;

    /**
     * @example 0.33908754623921084
     *
     * @var string
     */
    public $proportion;

    /**
     * @example 0.001746031746031746
     *
     * @var string
     */
    public $qps;

    /**
     * @example 0
     *
     * @var string
     */
    public $reqErrRate;

    /**
     * @example 254166333
     *
     * @var string
     */
    public $totalBytes;

    /**
     * @example 88
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
        'ISP'             => 'ISP',
        'ispEname'        => 'IspEname',
        'proportion'      => 'Proportion',
        'qps'             => 'Qps',
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
