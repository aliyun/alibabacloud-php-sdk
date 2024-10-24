<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoResponseBody\queryResourceInfoList;
use AlibabaCloud\Tea\Model;

class QuerySessionInfoResponseBody extends Model
{
    /**
     * @var queryResourceInfoList[]
     */
    public $queryResourceInfoList;

    /**
     * @example 4D902811-B75C-5D1B-8882-D515F8E2F977
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 26
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'queryResourceInfoList' => 'queryResourceInfoList',
        'requestId'             => 'requestId',
        'total'                 => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryResourceInfoList) {
            $res['queryResourceInfoList'] = [];
            if (null !== $this->queryResourceInfoList && \is_array($this->queryResourceInfoList)) {
                $n = 0;
                foreach ($this->queryResourceInfoList as $item) {
                    $res['queryResourceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySessionInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['queryResourceInfoList'])) {
            if (!empty($map['queryResourceInfoList'])) {
                $model->queryResourceInfoList = [];
                $n                            = 0;
                foreach ($map['queryResourceInfoList'] as $item) {
                    $model->queryResourceInfoList[$n++] = null !== $item ? queryResourceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
