<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\ViewSmartAccessGatewayBgpRouteResponseBody\taskStates;

class ViewSmartAccessGatewayBgpRouteResponseBody extends Model
{
    /**
     * @var int
     */
    public $holdTime;

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
    public $requestId;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'holdTime' => 'HoldTime',
        'keepAlive' => 'KeepAlive',
        'localAs' => 'LocalAs',
        'requestId' => 'RequestId',
        'routerId' => 'RouterId',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
        if (\is_array($this->taskStates)) {
            Model::validateArray($this->taskStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->holdTime) {
            $res['HoldTime'] = $this->holdTime;
        }

        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }

        if (null !== $this->localAs) {
            $res['LocalAs'] = $this->localAs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        if (null !== $this->taskStates) {
            if (\is_array($this->taskStates)) {
                $res['TaskStates'] = [];
                $n1 = 0;
                foreach ($this->taskStates as $item1) {
                    $res['TaskStates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['HoldTime'])) {
            $model->holdTime = $map['HoldTime'];
        }

        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }

        if (isset($map['LocalAs'])) {
            $model->localAs = $map['LocalAs'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n1 = 0;
                foreach ($map['TaskStates'] as $item1) {
                    $model->taskStates[$n1] = taskStates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
