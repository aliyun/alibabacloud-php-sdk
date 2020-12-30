<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponseBody\taskStates;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponseBody\wans;
use AlibabaCloud\Tea\Model;

class DescribeSagWanListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var wans[]
     */
    public $wans;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'requestId'  => 'RequestId',
        'wans'       => 'Wans',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->wans) {
            $res['Wans'] = [];
            if (null !== $this->wans && \is_array($this->wans)) {
                $n = 0;
                foreach ($this->wans as $item) {
                    $res['Wans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeSagWanListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Wans'])) {
            if (!empty($map['Wans'])) {
                $model->wans = [];
                $n           = 0;
                foreach ($map['Wans'] as $item) {
                    $model->wans[$n++] = null !== $item ? wans::fromMap($item) : $item;
                }
            }
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
