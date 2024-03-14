<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\SDK\ARMS\V20210519\Models\GetStackResponseBody\stackInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackInfo) {
            $res['StackInfo'] = [];
            if (null !== $this->stackInfo && \is_array($this->stackInfo)) {
                $n = 0;
                foreach ($this->stackInfo as $item) {
                    $res['StackInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackInfo'])) {
            if (!empty($map['StackInfo'])) {
                $model->stackInfo = [];
                $n                = 0;
                foreach ($map['StackInfo'] as $item) {
                    $model->stackInfo[$n++] = null !== $item ? stackInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
