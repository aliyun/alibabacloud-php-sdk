<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\network;

use AlibabaCloud\Dara\Model;

class interfaces extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rxBytes;

    /**
     * @var int
     */
    public $rxDrops;

    /**
     * @var int
     */
    public $rxErrors;

    /**
     * @var int
     */
    public $rxPackets;

    /**
     * @var int
     */
    public $txBytes;

    /**
     * @var int
     */
    public $txDrops;

    /**
     * @var int
     */
    public $txErrors;

    /**
     * @var int
     */
    public $txPackets;
    protected $_name = [
        'name' => 'Name',
        'rxBytes' => 'RxBytes',
        'rxDrops' => 'RxDrops',
        'rxErrors' => 'RxErrors',
        'rxPackets' => 'RxPackets',
        'txBytes' => 'TxBytes',
        'txDrops' => 'TxDrops',
        'txErrors' => 'TxErrors',
        'txPackets' => 'TxPackets',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
