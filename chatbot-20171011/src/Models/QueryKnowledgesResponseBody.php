<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryKnowledgesResponseBody\knowledges;
use AlibabaCloud\Tea\Model;

class QueryKnowledgesResponseBody extends Model
{
    /**
     * @var knowledges[]
     */
    public $knowledges;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example D2605A09-827E-5C50-87A5-547498B93E8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 84
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'knowledges' => 'Knowledges',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledges) {
            $res['Knowledges'] = [];
            if (null !== $this->knowledges && \is_array($this->knowledges)) {
                $n = 0;
                foreach ($this->knowledges as $item) {
                    $res['Knowledges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryKnowledgesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Knowledges'])) {
            if (!empty($map['Knowledges'])) {
                $model->knowledges = [];
                $n                 = 0;
                foreach ($map['Knowledges'] as $item) {
                    $model->knowledges[$n++] = null !== $item ? knowledges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
