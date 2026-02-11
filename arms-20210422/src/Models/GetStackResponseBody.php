<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetStackResponseBody\stackInfo;

class GetStackResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stackInfo[]
     */
    public $stackInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackInfo' => 'StackInfo',
    ];

    public function validate()
    {
        if (\is_array($this->stackInfo)) {
            Model::validateArray($this->stackInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stackInfo) {
            if (\is_array($this->stackInfo)) {
                $res['StackInfo'] = [];
                $n1 = 0;
                foreach ($this->stackInfo as $item1) {
                    $res['StackInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['StackInfo'])) {
            if (!empty($map['StackInfo'])) {
                $model->stackInfo = [];
                $n1 = 0;
                foreach ($map['StackInfo'] as $item1) {
                    $model->stackInfo[$n1] = stackInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
