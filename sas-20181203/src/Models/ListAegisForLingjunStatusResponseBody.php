<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAegisForLingjunStatusResponseBody\invokeTasks;

class ListAegisForLingjunStatusResponseBody extends Model
{
    /**
     * @var invokeTasks[]
     */
    public $invokeTasks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'invokeTasks' => 'InvokeTasks',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->invokeTasks)) {
            Model::validateArray($this->invokeTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeTasks) {
            if (\is_array($this->invokeTasks)) {
                $res['InvokeTasks'] = [];
                $n1 = 0;
                foreach ($this->invokeTasks as $item1) {
                    $res['InvokeTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['InvokeTasks'])) {
            if (!empty($map['InvokeTasks'])) {
                $model->invokeTasks = [];
                $n1 = 0;
                foreach ($map['InvokeTasks'] as $item1) {
                    $model->invokeTasks[$n1] = invokeTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
