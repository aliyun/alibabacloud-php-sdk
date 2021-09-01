<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody\itemBizList;
use AlibabaCloud\Tea\Model;

class QueryItemInSubBizsResponseBody extends Model
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
     * @var itemBizList[]
     */
    public $itemBizList;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'itemBizList' => 'ItemBizList',
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
        if (null !== $this->itemBizList) {
            $res['ItemBizList'] = [];
            if (null !== $this->itemBizList && \is_array($this->itemBizList)) {
                $n = 0;
                foreach ($this->itemBizList as $item) {
                    $res['ItemBizList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryItemInSubBizsResponseBody
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
        if (isset($map['ItemBizList'])) {
            if (!empty($map['ItemBizList'])) {
                $model->itemBizList = [];
                $n                  = 0;
                foreach ($map['ItemBizList'] as $item) {
                    $model->itemBizList[$n++] = null !== $item ? itemBizList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
