<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCoreWordsResponseBody\coreWords;
use AlibabaCloud\Tea\Model;

class QueryCoreWordsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var coreWords[]
     */
    public $coreWords;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'coreWords'  => 'CoreWords',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->coreWords) {
            $res['CoreWords'] = [];
            if (null !== $this->coreWords && \is_array($this->coreWords)) {
                $n = 0;
                foreach ($this->coreWords as $item) {
                    $res['CoreWords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['CoreWords'])) {
            if (!empty($map['CoreWords'])) {
                $model->coreWords = [];
                $n                = 0;
                foreach ($map['CoreWords'] as $item) {
                    $model->coreWords[$n++] = null !== $item ? coreWords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
