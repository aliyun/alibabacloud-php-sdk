<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddrAttributeInfoResponseBody extends Model
{
    /**
     * @description The addresses that were queried.
     *
     * @var addr
     */
    public $addr;

    /**
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addr'      => 'Addr',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            $model->addr = addr::fromMap($map['Addr']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
