<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody\clientIpList;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopClientIpVisitResponseBody extends Model
{
    /**
     * @description A list of client IP addresses.
     *
     * @var clientIpList[]
     */
    public $clientIpList;

    /**
     * @description The ID of the request.
     *
     * @example 64D28B53-5902-409B-94F6-FD46680144FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientIpList' => 'ClientIpList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpList) {
            $res['ClientIpList'] = [];
            if (null !== $this->clientIpList && \is_array($this->clientIpList)) {
                $n = 0;
                foreach ($this->clientIpList as $item) {
                    $res['ClientIpList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainTopClientIpVisitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = [];
                $n                   = 0;
                foreach ($map['ClientIpList'] as $item) {
                    $model->clientIpList[$n++] = null !== $item ? clientIpList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
