<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagUserDnsResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagUserDnsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slaveDns;

    /**
     * @var taskStates[]
     */
    public $taskStates;

    /**
     * @var string
     */
    public $masterDns;
    protected $_name = [
        'requestId'  => 'RequestId',
        'slaveDns'   => 'SlaveDns',
        'taskStates' => 'TaskStates',
        'masterDns'  => 'MasterDns',
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
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
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
        if (null !== $this->masterDns) {
            $res['MasterDns'] = $this->masterDns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagUserDnsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
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
        if (isset($map['MasterDns'])) {
            $model->masterDns = $map['MasterDns'];
        }

        return $model;
    }
}
