<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagManagementPortResponseBody\taskStates;

class DescribeSagManagementPortResponseBody extends Model
{
    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'gateway' => 'Gateway',
        'IP' => 'IP',
        'mask' => 'Mask',
        'requestId' => 'RequestId',
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
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
