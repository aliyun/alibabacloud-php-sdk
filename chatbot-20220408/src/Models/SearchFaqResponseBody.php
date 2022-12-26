<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqResponseBody\faqHits;
use AlibabaCloud\Tea\Model;

class SearchFaqResponseBody extends Model
{
    /**
     * @var faqHits[]
     */
    public $faqHits;

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
     * @example E45491D5-7E0A-42C6-9B21-91D1066B1475
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1075
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'faqHits'    => 'FaqHits',
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
        if (null !== $this->faqHits) {
            $res['FaqHits'] = [];
            if (null !== $this->faqHits && \is_array($this->faqHits)) {
                $n = 0;
                foreach ($this->faqHits as $item) {
                    $res['FaqHits'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return SearchFaqResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaqHits'])) {
            if (!empty($map['FaqHits'])) {
                $model->faqHits = [];
                $n              = 0;
                foreach ($map['FaqHits'] as $item) {
                    $model->faqHits[$n++] = null !== $item ? faqHits::fromMap($item) : $item;
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
