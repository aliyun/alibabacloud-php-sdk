<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\network;

use AlibabaCloud\Tea\Model;

class interfaces extends Model
{
    /**
     * @description The name of the NIC.
     *
     * @example eth0
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of bytes received by the NIC.
     *
     * @example 505001954
     *
     * @var int
     */
    public $rxBytes;

    /**
     * @description The number of received packets dropped on the NIC.
     *
     * @example 0
     *
     * @var int
     */
    public $rxDrops;

    /**
     * @description The number of received packet errors on the NIC.
     *
     * @example 0
     *
     * @var int
     */
    public $rxErrors;

    /**
     * @description The number of packets received by the NIC.
     *
     * @example 4800583
     *
     * @var int
     */
    public $rxPackets;

    /**
     * @description The number of bytes transmitted by the NIC.
     *
     * @example 1381805699
     *
     * @var int
     */
    public $txBytes;

    /**
     * @description The number of transmitted packets dropped on the NIC.
     *
     * @example 0
     *
     * @var int
     */
    public $txDrops;

    /**
     * @description The number of transmitted packet errors on the NIC.
     *
     * @example 0
     *
     * @var int
     */
    public $txErrors;

    /**
     * @description The number of packets transmitted by the NIC.
     *
     * @example 5158427
     *
     * @var int
     */
    public $txPackets;
    protected $_name = [
        'name'      => 'Name',
        'rxBytes'   => 'RxBytes',
        'rxDrops'   => 'RxDrops',
        'rxErrors'  => 'RxErrors',
        'rxPackets' => 'RxPackets',
        'txBytes'   => 'TxBytes',
        'txDrops'   => 'TxDrops',
        'txErrors'  => 'TxErrors',
        'txPackets' => 'TxPackets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rxBytes) {
            $res['RxBytes'] = $this->rxBytes;
        }
        if (null !== $this->rxDrops) {
            $res['RxDrops'] = $this->rxDrops;
        }
        if (null !== $this->rxErrors) {
            $res['RxErrors'] = $this->rxErrors;
        }
        if (null !== $this->rxPackets) {
            $res['RxPackets'] = $this->rxPackets;
        }
        if (null !== $this->txBytes) {
            $res['TxBytes'] = $this->txBytes;
        }
        if (null !== $this->txDrops) {
            $res['TxDrops'] = $this->txDrops;
        }
        if (null !== $this->txErrors) {
            $res['TxErrors'] = $this->txErrors;
        }
        if (null !== $this->txPackets) {
            $res['TxPackets'] = $this->txPackets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RxBytes'])) {
            $model->rxBytes = $map['RxBytes'];
        }
        if (isset($map['RxDrops'])) {
            $model->rxDrops = $map['RxDrops'];
        }
        if (isset($map['RxErrors'])) {
            $model->rxErrors = $map['RxErrors'];
        }
        if (isset($map['RxPackets'])) {
            $model->rxPackets = $map['RxPackets'];
        }
        if (isset($map['TxBytes'])) {
            $model->txBytes = $map['TxBytes'];
        }
        if (isset($map['TxDrops'])) {
            $model->txDrops = $map['TxDrops'];
        }
        if (isset($map['TxErrors'])) {
            $model->txErrors = $map['TxErrors'];
        }
        if (isset($map['TxPackets'])) {
            $model->txPackets = $map['TxPackets'];
        }

        return $model;
    }
}
