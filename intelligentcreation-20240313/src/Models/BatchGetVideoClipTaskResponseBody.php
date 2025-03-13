<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody\taskList;
use AlibabaCloud\Tea\Model;

class BatchGetVideoClipTaskResponseBody extends Model
{
    /**
     * @example 86A90C40-D1AB-50DA-A4B1-0D545F80F2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var taskList[]
     */
    public $taskList;
    protected $_name = [
        'requestId' => 'requestId',
        'taskList'  => 'taskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->taskList) {
            $res['taskList'] = [];
            if (null !== $this->taskList && \is_array($this->taskList)) {
                $n = 0;
                foreach ($this->taskList as $item) {
                    $res['taskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetVideoClipTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['taskList'])) {
            if (!empty($map['taskList'])) {
                $model->taskList = [];
                $n               = 0;
                foreach ($map['taskList'] as $item) {
                    $model->taskList[$n++] = null !== $item ? taskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
