<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionSpecResponseBody\memoryList;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionSpecResponseBody\runtimeList;
use AlibabaCloud\Tea\Model;

class ListFunctionSpecResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var memoryList[]
     */
    public $memoryList;

    /**
     * @var runtimeList[]
     */
    public $runtimeList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'memoryList'  => 'MemoryList',
        'runtimeList' => 'RuntimeList',
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
        if (null !== $this->memoryList) {
            $res['MemoryList'] = [];
            if (null !== $this->memoryList && \is_array($this->memoryList)) {
                $n = 0;
                foreach ($this->memoryList as $item) {
                    $res['MemoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runtimeList) {
            $res['RuntimeList'] = [];
            if (null !== $this->runtimeList && \is_array($this->runtimeList)) {
                $n = 0;
                foreach ($this->runtimeList as $item) {
                    $res['RuntimeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MemoryList'])) {
            if (!empty($map['MemoryList'])) {
                $model->memoryList = [];
                $n                 = 0;
                foreach ($map['MemoryList'] as $item) {
                    $model->memoryList[$n++] = null !== $item ? memoryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuntimeList'])) {
            if (!empty($map['RuntimeList'])) {
                $model->runtimeList = [];
                $n                  = 0;
                foreach ($map['RuntimeList'] as $item) {
                    $model->runtimeList[$n++] = null !== $item ? runtimeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
