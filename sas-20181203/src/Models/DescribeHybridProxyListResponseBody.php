<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyListResponseBody\proxyList;

class DescribeHybridProxyListResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var proxyList[]
     */
    public $proxyList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'proxyList' => 'ProxyList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->proxyList)) {
            Model::validateArray($this->proxyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->proxyList) {
            if (\is_array($this->proxyList)) {
                $res['ProxyList'] = [];
                $n1 = 0;
                foreach ($this->proxyList as $item1) {
                    $res['ProxyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['ProxyList'])) {
            if (!empty($map['ProxyList'])) {
                $model->proxyList = [];
                $n1 = 0;
                foreach ($map['ProxyList'] as $item1) {
                    $model->proxyList[$n1] = proxyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
