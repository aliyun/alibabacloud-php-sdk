<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class listVendorDetail extends Model
{
    /**
     * @var string
     */
    public $netWorkDelay;

    /**
     * @var string
     */
    public $signalStrength;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'netWorkDelay'   => 'NetWorkDelay',
        'signalStrength' => 'SignalStrength',
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
        if (null !== $this->signalStrength) {
            $res['SignalStrength'] = $this->signalStrength;
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
        if (isset($map['SignalStrength'])) {
            $model->signalStrength = $map['SignalStrength'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
