<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\records\operations;

class records extends Model
{
    /**
     * @var string
     */
    public $clientHost;

    /**
     * @var string
     */
    public $consumeStatus;

    /**
     * @var bool
     */
    public $fifoEnable;

    /**
     * @var operations[]
     */
    public $operations;

    /**
     * @var string
     */
    public $popCk;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientHost' => 'clientHost',
        'consumeStatus' => 'consumeStatus',
        'fifoEnable' => 'fifoEnable',
        'operations' => 'operations',
        'popCk' => 'popCk',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->operations)) {
                $res['operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['operations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['operations'] as $item1) {
                    $model->operations[$n1++] = operations::fromMap($item1);
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
