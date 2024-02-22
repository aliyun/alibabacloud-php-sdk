<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchDocResponseBody\docHits;
use AlibabaCloud\Tea\Model;

class SearchDocResponseBody extends Model
{
    /**
     * @var docHits[]
     */
    public $docHits;

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
     * @description Id of the request
     *
     * @example E3E5C779-A630-45AC-B0F2-A4506A4212F1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 141
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'docHits'    => 'DocHits',
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
        if (null !== $this->docHits) {
            $res['DocHits'] = [];
            if (null !== $this->docHits && \is_array($this->docHits)) {
                $n = 0;
                foreach ($this->docHits as $item) {
                    $res['DocHits'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return SearchDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocHits'])) {
            if (!empty($map['DocHits'])) {
                $model->docHits = [];
                $n              = 0;
                foreach ($map['DocHits'] as $item) {
                    $model->docHits[$n++] = null !== $item ? docHits::fromMap($item) : $item;
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
