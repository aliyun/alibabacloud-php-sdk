<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRouteProtocolBgpResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagRouteProtocolBgpResponseBody extends Model
{
    /**
     * @var int
     */
    public $holdTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $keepAlive;

    /**
     * @var int
     */
    public $localAs;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'holdTime'   => 'HoldTime',
        'requestId'  => 'RequestId',
        'keepAlive'  => 'KeepAlive',
        'localAs'    => 'LocalAs',
        'routerId'   => 'RouterId',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->holdTime) {
            $res['HoldTime'] = $this->holdTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }
        if (null !== $this->localAs) {
            $res['LocalAs'] = $this->localAs;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->taskStates) {
            $res['TaskStates'] = [];
            if (null !== $this->taskStates && \is_array($this->taskStates)) {
                $n = 0;
                foreach ($this->taskStates as $item) {
                    $res['TaskStates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagRouteProtocolBgpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoldTime'])) {
            $model->holdTime = $map['HoldTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }
        if (isset($map['LocalAs'])) {
            $model->localAs = $map['LocalAs'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n                 = 0;
                foreach ($map['TaskStates'] as $item) {
                    $model->taskStates[$n++] = null !== $item ? taskStates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
