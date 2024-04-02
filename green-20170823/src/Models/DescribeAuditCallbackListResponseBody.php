<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditCallbackListResponseBody\callbackList;
use AlibabaCloud\Tea\Model;

class DescribeAuditCallbackListResponseBody extends Model
{
    /**
     * @var callbackList[]
     */
    public $callbackList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'callbackList' => 'CallbackList',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackList) {
            $res['CallbackList'] = [];
            if (null !== $this->callbackList && \is_array($this->callbackList)) {
                $n = 0;
                foreach ($this->callbackList as $item) {
                    $res['CallbackList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAuditCallbackListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackList'])) {
            if (!empty($map['CallbackList'])) {
                $model->callbackList = [];
                $n                   = 0;
                foreach ($map['CallbackList'] as $item) {
                    $model->callbackList[$n++] = null !== $item ? callbackList::fromMap($item) : $item;
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
