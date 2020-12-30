<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagLanListResponseBody\lans;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagLanListResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagLanListResponseBody extends Model
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
     * @var lans[]
     */
    public $lans;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskStates' => 'TaskStates',
        'lans'       => 'Lans',
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
        if (null !== $this->taskStates) {
            $res['TaskStates'] = [];
            if (null !== $this->taskStates && \is_array($this->taskStates)) {
                $n = 0;
                foreach ($this->taskStates as $item) {
                    $res['TaskStates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lans) {
            $res['Lans'] = [];
            if (null !== $this->lans && \is_array($this->lans)) {
                $n = 0;
                foreach ($this->lans as $item) {
                    $res['Lans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagLanListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Lans'])) {
            if (!empty($map['Lans'])) {
                $model->lans = [];
                $n           = 0;
                foreach ($map['Lans'] as $item) {
                    $model->lans[$n++] = null !== $item ? lans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
