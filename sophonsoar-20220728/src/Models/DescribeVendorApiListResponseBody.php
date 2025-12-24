<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListResponseBody\apiList;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListResponseBody\page;

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
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiList' => 'ApiList',
        'page' => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->apiList)) {
            Model::validateArray($this->apiList);
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiList) {
            if (\is_array($this->apiList)) {
                $res['ApiList'] = [];
                $n1 = 0;
                foreach ($this->apiList as $item1) {
                    $res['ApiList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n1 = 0;
                foreach ($map['ApiList'] as $item1) {
                    $model->apiList[$n1] = apiList::fromMap($item1);
                    ++$n1;
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
