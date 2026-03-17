<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListResponseBody\interfaces;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListResponseBody\taskStates;

class DescribeSagExpressConnectInterfaceListResponseBody extends Model
{
    /**
     * @var interfaces[]
     */
    public $interfaces;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'interfaces' => 'Interfaces',
        'requestId' => 'RequestId',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
        if (\is_array($this->interfaces)) {
            Model::validateArray($this->interfaces);
        }
        if (\is_array($this->taskStates)) {
            Model::validateArray($this->taskStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interfaces) {
            if (\is_array($this->interfaces)) {
                $res['Interfaces'] = [];
                $n1 = 0;
                foreach ($this->interfaces as $item1) {
                    $res['Interfaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Interfaces'])) {
            if (!empty($map['Interfaces'])) {
                $model->interfaces = [];
                $n1 = 0;
                foreach ($map['Interfaces'] as $item1) {
                    $model->interfaces[$n1] = interfaces::fromMap($item1);
                    ++$n1;
                }
            }
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
