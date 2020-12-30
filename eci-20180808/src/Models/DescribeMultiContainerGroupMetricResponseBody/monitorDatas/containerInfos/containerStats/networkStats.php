<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats\interfaceStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats\tcp;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats\tcp6;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats\udp;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats\udp6;
use AlibabaCloud\Tea\Model;

class networkStats extends Model
{
    /**
     * @var int
     */
    public $rxDropped;

    /**
     * @var tcp
     */
    public $tcp;

    /**
     * @var int
     */
    public $txErrors;

    /**
     * @var int
     */
    public $rxErrors;

    /**
     * @var interfaceStats[]
     */
    public $interfaceStats;

    /**
     * @var tcp6
     */
    public $tcp6;

    /**
     * @var int
     */
    public $txDropped;

    /**
     * @var udp
     */
    public $udp;

    /**
     * @var int
     */
    public $txBytes;

    /**
     * @var udp6
     */
    public $udp6;

    /**
     * @var int
     */
    public $rxPackets;

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
    public $txPackets;
    protected $_name = [
        'rxDropped'      => 'RxDropped',
        'tcp'            => 'Tcp',
        'txErrors'       => 'TxErrors',
        'rxErrors'       => 'RxErrors',
        'interfaceStats' => 'InterfaceStats',
        'tcp6'           => 'Tcp6',
        'txDropped'      => 'TxDropped',
        'udp'            => 'Udp',
        'txBytes'        => 'TxBytes',
        'udp6'           => 'Udp6',
        'rxPackets'      => 'RxPackets',
        'name'           => 'Name',
        'rxBytes'        => 'RxBytes',
        'txPackets'      => 'TxPackets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rxDropped) {
            $res['RxDropped'] = $this->rxDropped;
        }
        if (null !== $this->tcp) {
            $res['Tcp'] = null !== $this->tcp ? $this->tcp->toMap() : null;
        }
        if (null !== $this->txErrors) {
            $res['TxErrors'] = $this->txErrors;
        }
        if (null !== $this->rxErrors) {
            $res['RxErrors'] = $this->rxErrors;
        }
        if (null !== $this->interfaceStats) {
            $res['InterfaceStats'] = [];
            if (null !== $this->interfaceStats && \is_array($this->interfaceStats)) {
                $n = 0;
                foreach ($this->interfaceStats as $item) {
                    $res['InterfaceStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tcp6) {
            $res['Tcp6'] = null !== $this->tcp6 ? $this->tcp6->toMap() : null;
        }
        if (null !== $this->txDropped) {
            $res['TxDropped'] = $this->txDropped;
        }
        if (null !== $this->udp) {
            $res['Udp'] = null !== $this->udp ? $this->udp->toMap() : null;
        }
        if (null !== $this->txBytes) {
            $res['TxBytes'] = $this->txBytes;
        }
        if (null !== $this->udp6) {
            $res['Udp6'] = null !== $this->udp6 ? $this->udp6->toMap() : null;
        }
        if (null !== $this->rxPackets) {
            $res['RxPackets'] = $this->rxPackets;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rxBytes) {
            $res['RxBytes'] = $this->rxBytes;
        }
        if (null !== $this->txPackets) {
            $res['TxPackets'] = $this->txPackets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RxDropped'])) {
            $model->rxDropped = $map['RxDropped'];
        }
        if (isset($map['Tcp'])) {
            $model->tcp = tcp::fromMap($map['Tcp']);
        }
        if (isset($map['TxErrors'])) {
            $model->txErrors = $map['TxErrors'];
        }
        if (isset($map['RxErrors'])) {
            $model->rxErrors = $map['RxErrors'];
        }
        if (isset($map['InterfaceStats'])) {
            if (!empty($map['InterfaceStats'])) {
                $model->interfaceStats = [];
                $n                     = 0;
                foreach ($map['InterfaceStats'] as $item) {
                    $model->interfaceStats[$n++] = null !== $item ? interfaceStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tcp6'])) {
            $model->tcp6 = tcp6::fromMap($map['Tcp6']);
        }
        if (isset($map['TxDropped'])) {
            $model->txDropped = $map['TxDropped'];
        }
        if (isset($map['Udp'])) {
            $model->udp = udp::fromMap($map['Udp']);
        }
        if (isset($map['TxBytes'])) {
            $model->txBytes = $map['TxBytes'];
        }
        if (isset($map['Udp6'])) {
            $model->udp6 = udp6::fromMap($map['Udp6']);
        }
        if (isset($map['RxPackets'])) {
            $model->rxPackets = $map['RxPackets'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RxBytes'])) {
            $model->rxBytes = $map['RxBytes'];
        }
        if (isset($map['TxPackets'])) {
            $model->txPackets = $map['TxPackets'];
        }

        return $model;
    }
}
