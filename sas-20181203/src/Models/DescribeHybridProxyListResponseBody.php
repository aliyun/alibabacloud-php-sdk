<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyListResponseBody\proxyList;
use AlibabaCloud\Tea\Model;

class DescribeHybridProxyListResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The information about the proxy clusters.
     *
     * @var proxyList[]
     */
    public $proxyList;

    /**
     * @description The request ID.
     *
     * @example 75801E5D-E2EB-5C1D-B65D-2F7D2B00EF93
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'  => 'PageInfo',
        'proxyList' => 'ProxyList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->proxyList) {
            $res['ProxyList'] = [];
            if (null !== $this->proxyList && \is_array($this->proxyList)) {
                $n = 0;
                foreach ($this->proxyList as $item) {
                    $res['ProxyList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeHybridProxyListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['ProxyList'])) {
            if (!empty($map['ProxyList'])) {
                $model->proxyList = [];
                $n                = 0;
                foreach ($map['ProxyList'] as $item) {
                    $model->proxyList[$n++] = null !== $item ? proxyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
