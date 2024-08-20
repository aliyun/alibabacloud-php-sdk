<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskResponseBody\resultList;
use AlibabaCloud\Tea\Model;

class BatchGetProjectTaskResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 11
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'requestId'  => 'requestId',
        'resultList' => 'resultList',
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
        if (null !== $this->resultList) {
            $res['resultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['resultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetProjectTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resultList'])) {
            if (!empty($map['resultList'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['resultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
