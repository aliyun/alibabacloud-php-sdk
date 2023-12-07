<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDescribeCdnIpInfoResponseBody\ipInfoList;
use AlibabaCloud\Tea\Model;

class BatchDescribeCdnIpInfoResponseBody extends Model
{
    /**
     * @description The results about IP addresses returned.
     *
     * @var ipInfoList[]
     */
    public $ipInfoList;

    /**
     * @description The ID of the request.
     *
     * @example 55ADD936-763F-5E1A-BF54-2EA3F6E94A52
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipInfoList' => 'IpInfoList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipInfoList) {
            $res['IpInfoList'] = [];
            if (null !== $this->ipInfoList && \is_array($this->ipInfoList)) {
                $n = 0;
                foreach ($this->ipInfoList as $item) {
                    $res['IpInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return BatchDescribeCdnIpInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpInfoList'])) {
            if (!empty($map['IpInfoList'])) {
                $model->ipInfoList = [];
                $n                 = 0;
                foreach ($map['IpInfoList'] as $item) {
                    $model->ipInfoList[$n++] = null !== $item ? ipInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
