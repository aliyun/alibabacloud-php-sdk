<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainISPDataResponseBody\value;

use AlibabaCloud\Dara\Model;

class ISPProportionData extends Model
{
    /**
     * @var string
     */
    public $avgObjectSize;

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
    public $bps;

    /**
     * @var string
     */
    public $bytesProportion;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $ispEname;

    /**
     * @var string
     */
    public $proportion;

    /**
     * @var string
     */
    public $qps;

    /**
     * @var string
     */
    public $reqErrRate;

    /**
     * @var string
     */
    public $totalBytes;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
