<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\records\operations;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description Client host.
     *
     * @example xx.xx.xx.xx
     *
     * @var string
     */
    public $clientHost;

    /**
     * @description Consume status.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $consumeStatus;

    /**
     * @description Whether to consume fifo.
     *
     * @example true
     *
     * @var bool
     */
    public $fifoEnable;

    /**
     * @description Operation list.
     *
     * @var operations[]
     */
    public $operations;

    /**
     * @description POP_CK
     *
     * @example 123
     *
     * @var string
     */
    public $popCk;

    /**
     * @description Consumer name.
     *
     * @example test
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientHost'    => 'clientHost',
        'consumeStatus' => 'consumeStatus',
        'fifoEnable'    => 'fifoEnable',
        'operations'    => 'operations',
        'popCk'         => 'popCk',
        'userName'      => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientHost) {
            $res['clientHost'] = $this->clientHost;
        }
        if (null !== $this->consumeStatus) {
            $res['consumeStatus'] = $this->consumeStatus;
        }
        if (null !== $this->fifoEnable) {
            $res['fifoEnable'] = $this->fifoEnable;
        }
        if (null !== $this->operations) {
            $res['operations'] = [];
            if (null !== $this->operations && \is_array($this->operations)) {
                $n = 0;
                foreach ($this->operations as $item) {
                    $res['operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->popCk) {
            $res['popCk'] = $this->popCk;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientHost'])) {
            $model->clientHost = $map['clientHost'];
        }
        if (isset($map['consumeStatus'])) {
            $model->consumeStatus = $map['consumeStatus'];
        }
        if (isset($map['fifoEnable'])) {
            $model->fifoEnable = $map['fifoEnable'];
        }
        if (isset($map['operations'])) {
            if (!empty($map['operations'])) {
                $model->operations = [];
                $n                 = 0;
                foreach ($map['operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? operations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['popCk'])) {
            $model->popCk = $map['popCk'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
