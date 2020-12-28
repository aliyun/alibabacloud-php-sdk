<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetMetadataAmountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $maxVirtualHosts;

    /**
     * @var int
     */
    public $currentVirtualHosts;

    /**
     * @var int
     */
    public $maxQueues;

    /**
     * @var int
     */
    public $currentExchanges;

    /**
     * @var int
     */
    public $maxExchanges;

    /**
     * @var int
     */
    public $currentQueues;
    protected $_name = [
        'maxVirtualHosts'     => 'MaxVirtualHosts',
        'currentVirtualHosts' => 'CurrentVirtualHosts',
        'maxQueues'           => 'MaxQueues',
        'currentExchanges'    => 'CurrentExchanges',
        'maxExchanges'        => 'MaxExchanges',
        'currentQueues'       => 'CurrentQueues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxVirtualHosts) {
            $res['MaxVirtualHosts'] = $this->maxVirtualHosts;
        }
        if (null !== $this->currentVirtualHosts) {
            $res['CurrentVirtualHosts'] = $this->currentVirtualHosts;
        }
        if (null !== $this->maxQueues) {
            $res['MaxQueues'] = $this->maxQueues;
        }
        if (null !== $this->currentExchanges) {
            $res['CurrentExchanges'] = $this->currentExchanges;
        }
        if (null !== $this->maxExchanges) {
            $res['MaxExchanges'] = $this->maxExchanges;
        }
        if (null !== $this->currentQueues) {
            $res['CurrentQueues'] = $this->currentQueues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxVirtualHosts'])) {
            $model->maxVirtualHosts = $map['MaxVirtualHosts'];
        }
        if (isset($map['CurrentVirtualHosts'])) {
            $model->currentVirtualHosts = $map['CurrentVirtualHosts'];
        }
        if (isset($map['MaxQueues'])) {
            $model->maxQueues = $map['MaxQueues'];
        }
        if (isset($map['CurrentExchanges'])) {
            $model->currentExchanges = $map['CurrentExchanges'];
        }
        if (isset($map['MaxExchanges'])) {
            $model->maxExchanges = $map['MaxExchanges'];
        }
        if (isset($map['CurrentQueues'])) {
            $model->currentQueues = $map['CurrentQueues'];
        }

        return $model;
    }
}
