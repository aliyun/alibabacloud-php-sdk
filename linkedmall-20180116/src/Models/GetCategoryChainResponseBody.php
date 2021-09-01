<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCategoryChainResponseBody\categoryList;
use AlibabaCloud\Tea\Model;

class GetCategoryChainResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var categoryList[]
     */
    public $categoryList;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'categoryList' => 'CategoryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->categoryList) {
            $res['CategoryList'] = [];
            if (null !== $this->categoryList && \is_array($this->categoryList)) {
                $n = 0;
                foreach ($this->categoryList as $item) {
                    $res['CategoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCategoryChainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CategoryList'])) {
            if (!empty($map['CategoryList'])) {
                $model->categoryList = [];
                $n                   = 0;
                foreach ($map['CategoryList'] as $item) {
                    $model->categoryList[$n++] = null !== $item ? categoryList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
