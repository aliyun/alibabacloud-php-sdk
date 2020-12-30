<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class udp extends Model
{
    /**
     * @var int
     */
    public $txQueued;

    /**
     * @var int
     */
    public $listen;

    /**
     * @var int
     */
    public $dropped;

    /**
     * @var int
     */
    public $rxQueued;
    protected $_name = [
        'txQueued' => 'TxQueued',
        'listen'   => 'Listen',
        'dropped'  => 'Dropped',
        'rxQueued' => 'RxQueued',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->txQueued) {
            $res['TxQueued'] = $this->txQueued;
        }
        if (null !== $this->listen) {
            $res['Listen'] = $this->listen;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->rxQueued) {
            $res['RxQueued'] = $this->rxQueued;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TxQueued'])) {
            $model->txQueued = $map['TxQueued'];
        }
        if (isset($map['Listen'])) {
            $model->listen = $map['Listen'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['RxQueued'])) {
            $model->rxQueued = $map['RxQueued'];
        }

        return $model;
    }
}
