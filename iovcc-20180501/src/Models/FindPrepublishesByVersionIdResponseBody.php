<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByVersionIdResponseBody\prepublishList;
use AlibabaCloud\Tea\Model;

class FindPrepublishesByVersionIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var prepublishList[]
     */
    public $prepublishList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'prepublishList' => 'PrepublishList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->prepublishList) {
            $res['PrepublishList'] = [];
            if (null !== $this->prepublishList && \is_array($this->prepublishList)) {
                $n = 0;
                foreach ($this->prepublishList as $item) {
                    $res['PrepublishList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindPrepublishesByVersionIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrepublishList'])) {
            if (!empty($map['PrepublishList'])) {
                $model->prepublishList = [];
                $n                     = 0;
                foreach ($map['PrepublishList'] as $item) {
                    $model->prepublishList[$n++] = null !== $item ? prepublishList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
