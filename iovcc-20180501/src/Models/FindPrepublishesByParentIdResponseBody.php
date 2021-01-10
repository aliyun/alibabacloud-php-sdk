<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByParentIdResponseBody\prepublishList;
use AlibabaCloud\Tea\Model;

class FindPrepublishesByParentIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var prepublishList
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
            $res['PrepublishList'] = null !== $this->prepublishList ? $this->prepublishList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindPrepublishesByParentIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrepublishList'])) {
            $model->prepublishList = prepublishList::fromMap($map['PrepublishList']);
        }

        return $model;
    }
}
