<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponseBody\taskStates;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponseBody\wans;

class DescribeSagWanListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskStates[]
     */
    public $taskStates;

    /**
     * @var wans[]
     */
    public $wans;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskStates' => 'TaskStates',
        'wans' => 'Wans',
    ];

    public function validate()
    {
        if (\is_array($this->taskStates)) {
            Model::validateArray($this->taskStates);
        }
        if (\is_array($this->wans)) {
            Model::validateArray($this->wans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->wans) {
            if (\is_array($this->wans)) {
                $res['Wans'] = [];
                $n1 = 0;
                foreach ($this->wans as $item1) {
                    $res['Wans'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Wans'])) {
            if (!empty($map['Wans'])) {
                $model->wans = [];
                $n1 = 0;
                foreach ($map['Wans'] as $item1) {
                    $model->wans[$n1] = wans::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
