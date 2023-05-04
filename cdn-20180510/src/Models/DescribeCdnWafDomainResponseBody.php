<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnWafDomainResponseBody\outPutDomains;
use AlibabaCloud\Tea\Model;

class DescribeCdnWafDomainResponseBody extends Model
{
    /**
     * @description The information about the accelerated domain name.
     *
     * @var outPutDomains[]
     */
    public $outPutDomains;

    /**
     * @description The ID of the request.
     *
     * @example CB1A380B-09F0-41BB-802B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of accelerated domain names.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'outPutDomains' => 'OutPutDomains',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outPutDomains) {
            $res['OutPutDomains'] = [];
            if (null !== $this->outPutDomains && \is_array($this->outPutDomains)) {
                $n = 0;
                foreach ($this->outPutDomains as $item) {
                    $res['OutPutDomains'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCdnWafDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutPutDomains'])) {
            if (!empty($map['OutPutDomains'])) {
                $model->outPutDomains = [];
                $n                    = 0;
                foreach ($map['OutPutDomains'] as $item) {
                    $model->outPutDomains[$n++] = null !== $item ? outPutDomains::fromMap($item) : $item;
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
