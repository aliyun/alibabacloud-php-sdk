<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class listVendorDetail extends Model
{
    /**
     * @example 20
     *
     * @var string
     */
    public $netWorkDelay;

    /**
     * @example 80%
     *
     * @var string
     */
    public $ratio;

    /**
     * @example 20
     *
     * @var string
     */
    public $signalStrength;

    /**
     * @example 100MB
     *
     * @var string
     */
    public $usedFlow;

    /**
     * @example CMCC
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'netWorkDelay'   => 'NetWorkDelay',
        'ratio'          => 'Ratio',
        'signalStrength' => 'SignalStrength',
        'usedFlow'       => 'UsedFlow',
        'vendor'         => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netWorkDelay) {
            $res['NetWorkDelay'] = $this->netWorkDelay;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->signalStrength) {
            $res['SignalStrength'] = $this->signalStrength;
        }
        if (null !== $this->usedFlow) {
            $res['UsedFlow'] = $this->usedFlow;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listVendorDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetWorkDelay'])) {
            $model->netWorkDelay = $map['NetWorkDelay'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['SignalStrength'])) {
            $model->signalStrength = $map['SignalStrength'];
        }
        if (isset($map['UsedFlow'])) {
            $model->usedFlow = $map['UsedFlow'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
