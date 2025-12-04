<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\qoSConfig;

use AlibabaCloud\Dara\Model;

class qoS extends Model
{
    /**
     * @var int
     */
    public $bandwidthRx;

    /**
     * @var int
     */
    public $bandwidthTx;

    /**
     * @var int
     */
    public $concurrentConnections;

    /**
     * @var int
     */
    public $ppsRx;

    /**
     * @var int
     */
    public $ppsTx;
    protected $_name = [
        'bandwidthRx' => 'BandwidthRx',
        'bandwidthTx' => 'BandwidthTx',
        'concurrentConnections' => 'ConcurrentConnections',
        'ppsRx' => 'PpsRx',
        'ppsTx' => 'PpsTx',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthRx) {
            $res['BandwidthRx'] = $this->bandwidthRx;
        }

        if (null !== $this->bandwidthTx) {
            $res['BandwidthTx'] = $this->bandwidthTx;
        }

        if (null !== $this->concurrentConnections) {
            $res['ConcurrentConnections'] = $this->concurrentConnections;
        }

        if (null !== $this->ppsRx) {
            $res['PpsRx'] = $this->ppsRx;
        }

        if (null !== $this->ppsTx) {
            $res['PpsTx'] = $this->ppsTx;
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
        if (isset($map['BandwidthRx'])) {
            $model->bandwidthRx = $map['BandwidthRx'];
        }

        if (isset($map['BandwidthTx'])) {
            $model->bandwidthTx = $map['BandwidthTx'];
        }

        if (isset($map['ConcurrentConnections'])) {
            $model->concurrentConnections = $map['ConcurrentConnections'];
        }

        if (isset($map['PpsRx'])) {
            $model->ppsRx = $map['PpsRx'];
        }

        if (isset($map['PpsTx'])) {
            $model->ppsTx = $map['PpsTx'];
        }

        return $model;
    }
}
