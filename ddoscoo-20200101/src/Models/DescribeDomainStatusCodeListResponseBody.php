<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainStatusCodeListResponseBody\statusCodeList;
use AlibabaCloud\Tea\Model;

class DescribeDomainStatusCodeListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 3B63C0DD-8AC5-44B2-95D6-064CA9296B9C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics on response status codes.
     *
     * @var statusCodeList[]
     */
    public $statusCodeList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'statusCodeList' => 'StatusCodeList',
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
        if (null !== $this->statusCodeList) {
            $res['StatusCodeList'] = [];
            if (null !== $this->statusCodeList && \is_array($this->statusCodeList)) {
                $n = 0;
                foreach ($this->statusCodeList as $item) {
                    $res['StatusCodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainStatusCodeListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCodeList'])) {
            if (!empty($map['StatusCodeList'])) {
                $model->statusCodeList = [];
                $n                     = 0;
                foreach ($map['StatusCodeList'] as $item) {
                    $model->statusCodeList[$n++] = null !== $item ? statusCodeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
