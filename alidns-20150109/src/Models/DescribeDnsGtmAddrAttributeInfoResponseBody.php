<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddrAttributeInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var addr
     */
    public $addr;
    protected $_name = [
        'requestId' => 'RequestId',
        'addr'      => 'Addr',
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
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Addr'])) {
            $model->addr = addr::fromMap($map['Addr']);
        }

        return $model;
    }
}
