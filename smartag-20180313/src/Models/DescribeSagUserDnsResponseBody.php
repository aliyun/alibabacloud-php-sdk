<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagUserDnsResponseBody\taskStates;

class DescribeSagUserDnsResponseBody extends Model
{
    /**
     * @var string
     */
    public $masterDns;

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
    protected $_name = [
        'masterDns' => 'MasterDns',
        'requestId' => 'RequestId',
        'slaveDns' => 'SlaveDns',
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
        if (null !== $this->masterDns) {
            $res['MasterDns'] = $this->masterDns;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
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
        if (isset($map['MasterDns'])) {
            $model->masterDns = $map['MasterDns'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
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
