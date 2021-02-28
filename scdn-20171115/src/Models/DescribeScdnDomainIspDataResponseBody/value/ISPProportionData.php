<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainIspDataResponseBody\value;

use AlibabaCloud\Tea\Model;

class ISPProportionData extends Model
{
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
    public $reqErrRate;

    /**
     * @var string
     */
    public $avgObjectSize;

    /**
     * @var string
     */
    public $bps;

    /**
     * @var string
     */
    public $qps;

    /**
     * @var string
     */
    public $proportion;

    /**
     * @var string
     */
    public $ispEname;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $bytesProportion;
    protected $_name = [
        'totalQuery'      => 'TotalQuery',
        'totalBytes'      => 'TotalBytes',
        'avgResponseRate' => 'AvgResponseRate',
        'avgResponseTime' => 'AvgResponseTime',
        'reqErrRate'      => 'ReqErrRate',
        'avgObjectSize'   => 'AvgObjectSize',
        'bps'             => 'Bps',
        'qps'             => 'Qps',
        'proportion'      => 'Proportion',
        'ispEname'        => 'IspEname',
        'ISP'             => 'ISP',
        'bytesProportion' => 'BytesProportion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->reqErrRate) {
            $res['ReqErrRate'] = $this->reqErrRate;
        }
        if (null !== $this->avgObjectSize) {
            $res['AvgObjectSize'] = $this->avgObjectSize;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->ispEname) {
            $res['IspEname'] = $this->ispEname;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->bytesProportion) {
            $res['BytesProportion'] = $this->bytesProportion;
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
        if (isset($map['ReqErrRate'])) {
            $model->reqErrRate = $map['ReqErrRate'];
        }
        if (isset($map['AvgObjectSize'])) {
            $model->avgObjectSize = $map['AvgObjectSize'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['IspEname'])) {
            $model->ispEname = $map['IspEname'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['BytesProportion'])) {
            $model->bytesProportion = $map['BytesProportion'];
        }

        return $model;
    }
}
