<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeKeywordLibResponseBody\keywordLibList;
use AlibabaCloud\Tea\Model;

class DescribeKeywordLibResponseBody extends Model
{
    /**
     * @var keywordLibList[]
     */
    public $keywordLibList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'keywordLibList' => 'KeywordLibList',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywordLibList) {
            $res['KeywordLibList'] = [];
            if (null !== $this->keywordLibList && \is_array($this->keywordLibList)) {
                $n = 0;
                foreach ($this->keywordLibList as $item) {
                    $res['KeywordLibList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeKeywordLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeywordLibList'])) {
            if (!empty($map['KeywordLibList'])) {
                $model->keywordLibList = [];
                $n                     = 0;
                foreach ($map['KeywordLibList'] as $item) {
                    $model->keywordLibList[$n++] = null !== $item ? keywordLibList::fromMap($item) : $item;
                }
            }
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
