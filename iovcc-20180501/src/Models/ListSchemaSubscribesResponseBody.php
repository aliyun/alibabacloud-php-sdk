<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListSchemaSubscribesResponseBody\pageList;
use AlibabaCloud\Tea\Model;

class ListSchemaSubscribesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageList[]
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
            $res['PageList'] = [];
            if (null !== $this->pageList && \is_array($this->pageList)) {
                $n = 0;
                foreach ($this->pageList as $item) {
                    $res['PageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchemaSubscribesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageList'])) {
            if (!empty($map['PageList'])) {
                $model->pageList = [];
                $n               = 0;
                foreach ($map['PageList'] as $item) {
                    $model->pageList[$n++] = null !== $item ? pageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
