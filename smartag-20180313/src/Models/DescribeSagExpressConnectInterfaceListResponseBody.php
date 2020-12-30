<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListResponseBody\interfaces;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interfaces) {
            $res['Interfaces'] = [];
            if (null !== $this->interfaces && \is_array($this->interfaces)) {
                $n = 0;
                foreach ($this->interfaces as $item) {
                    $res['Interfaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeSagExpressConnectInterfaceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interfaces'])) {
            if (!empty($map['Interfaces'])) {
                $model->interfaces = [];
                $n                 = 0;
                foreach ($map['Interfaces'] as $item) {
                    $model->interfaces[$n++] = null !== $item ? interfaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
