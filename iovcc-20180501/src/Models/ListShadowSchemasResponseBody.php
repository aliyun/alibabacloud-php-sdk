<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListShadowSchemasResponseBody\pageList;
use AlibabaCloud\Tea\Model;

class ListShadowSchemasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageList
     */
    public $pageList;
    protected $_name = [
        'requestId' => 'RequestId',
        'pageList'  => 'PageList',
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
        if (null !== $this->pageList) {
            $res['PageList'] = null !== $this->pageList ? $this->pageList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShadowSchemasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageList'])) {
            $model->pageList = pageList::fromMap($map['PageList']);
        }

        return $model;
    }
}
