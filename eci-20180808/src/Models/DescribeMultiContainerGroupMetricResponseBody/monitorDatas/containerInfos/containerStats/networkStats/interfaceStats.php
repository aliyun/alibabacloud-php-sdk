<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class interfaceStats extends Model
{
    /**
     * @var int
     */
    public $rxErrors;

    /**
     * @var int
     */
    public $rxDropped;

    /**
     * @var int
     */
    public $txDropped;

    /**
     * @var int
     */
    public $txBytes;

    /**
     * @var int
     */
    public $rxPackets;

    /**
     * @var int
     */
    public $txErrors;

    /**
     * @var int
     */
    public $txPackets;

    /**
     * @var int
     */
    public $rxBytes;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'rxErrors'  => 'RxErrors',
        'rxDropped' => 'RxDropped',
        'txDropped' => 'TxDropped',
        'txBytes'   => 'TxBytes',
        'rxPackets' => 'RxPackets',
        'txErrors'  => 'TxErrors',
        'txPackets' => 'TxPackets',
        'rxBytes'   => 'RxBytes',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rxErrors) {
            $res['RxErrors'] = $this->rxErrors;
        }
        if (null !== $this->rxDropped) {
            $res['RxDropped'] = $this->rxDropped;
        }
        if (null !== $this->txDropped) {
            $res['TxDropped'] = $this->txDropped;
        }
        if (null !== $this->txBytes) {
            $res['TxBytes'] = $this->txBytes;
        }
        if (null !== $this->rxPackets) {
            $res['RxPackets'] = $this->rxPackets;
        }
        if (null !== $this->txErrors) {
            $res['TxErrors'] = $this->txErrors;
        }
        if (null !== $this->txPackets) {
            $res['TxPackets'] = $this->txPackets;
        }
        if (null !== $this->rxBytes) {
            $res['RxBytes'] = $this->rxBytes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaceStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RxErrors'])) {
            $model->rxErrors = $map['RxErrors'];
        }
        if (isset($map['RxDropped'])) {
            $model->rxDropped = $map['RxDropped'];
        }
        if (isset($map['TxDropped'])) {
            $model->txDropped = $map['TxDropped'];
        }
        if (isset($map['TxBytes'])) {
            $model->txBytes = $map['TxBytes'];
        }
        if (isset($map['RxPackets'])) {
            $model->rxPackets = $map['RxPackets'];
        }
        if (isset($map['TxErrors'])) {
            $model->txErrors = $map['TxErrors'];
        }
        if (isset($map['TxPackets'])) {
            $model->txPackets = $map['TxPackets'];
        }
        if (isset($map['RxBytes'])) {
            $model->rxBytes = $map['RxBytes'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
