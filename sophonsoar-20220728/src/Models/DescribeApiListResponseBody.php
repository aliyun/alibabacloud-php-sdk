<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeApiListResponseBody\apiList;
use AlibabaCloud\Tea\Model;

class DescribeApiListResponseBody extends Model
{
    /**
     * @var apiList[]
     */
    public $apiList;

    /**
     * @example 4A15D31E-B38B-5F7F-8DC0-1C74408875AA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiList'   => 'ApiList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiList) {
            $res['ApiList'] = [];
            if (null !== $this->apiList && \is_array($this->apiList)) {
                $n = 0;
                foreach ($this->apiList as $item) {
                    $res['ApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n              = 0;
                foreach ($map['ApiList'] as $item) {
                    $model->apiList[$n++] = null !== $item ? apiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
