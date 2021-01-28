<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainResponseBody\outPutDomains;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafDomainResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var outPutDomains[]
     */
    public $outPutDomains;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'outPutDomains' => 'OutPutDomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->outPutDomains) {
            $res['OutPutDomains'] = [];
            if (null !== $this->outPutDomains && \is_array($this->outPutDomains)) {
                $n = 0;
                foreach ($this->outPutDomains as $item) {
                    $res['OutPutDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OutPutDomains'])) {
            if (!empty($map['OutPutDomains'])) {
                $model->outPutDomains = [];
                $n                    = 0;
                foreach ($map['OutPutDomains'] as $item) {
                    $model->outPutDomains[$n++] = null !== $item ? outPutDomains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
