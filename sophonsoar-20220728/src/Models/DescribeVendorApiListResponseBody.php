<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListResponseBody\apiList;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListResponseBody\page;
use AlibabaCloud\Tea\Model;

class DescribeVendorApiListResponseBody extends Model
{
    /**
     * @var apiList[]
     */
    public $apiList;

    /**
     * @var page
     */
    public $page;

    /**
     * @example E7698CFB-****-5840-8EC9-691B86729E94
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiList' => 'ApiList',
        'page' => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVendorApiListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n = 0;
                foreach ($map['ApiList'] as $item) {
                    $model->apiList[$n++] = null !== $item ? apiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
