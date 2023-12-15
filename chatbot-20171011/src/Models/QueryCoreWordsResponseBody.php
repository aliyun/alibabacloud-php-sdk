<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCoreWordsResponseBody\coreWords;
use AlibabaCloud\Tea\Model;

class QueryCoreWordsResponseBody extends Model
{
    /**
     * @var coreWords[]
     */
    public $coreWords;

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
     * @example 92B81548-42B9-4B34-924B-4E778AEB412B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'coreWords'  => 'CoreWords',
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
        if (null !== $this->coreWords) {
            $res['CoreWords'] = [];
            if (null !== $this->coreWords && \is_array($this->coreWords)) {
                $n = 0;
                foreach ($this->coreWords as $item) {
                    $res['CoreWords'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return QueryCoreWordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWords'])) {
            if (!empty($map['CoreWords'])) {
                $model->coreWords = [];
                $n                = 0;
                foreach ($map['CoreWords'] as $item) {
                    $model->coreWords[$n++] = null !== $item ? coreWords::fromMap($item) : $item;
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
