<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\addrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\lines;
use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyAvailableConfigResponseBody extends Model
{
    /**
     * @description The address pools.
     *
     * @var addrPools
     */
    public $addrPools;

    /**
     * @description The Domain Name System (DNS) request sources.
     *
     * @var lines
     */
    public $lines;

    /**
     * @description The request ID.
     *
     * @example C2851BA9-CE56-49AF-8D12-4FC6A49EE688
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the global line is recommended.
     *
     * @example True
     *
     * @var bool
     */
    public $suggestSetDefaultLine;
    protected $_name = [
        'addrPools'             => 'AddrPools',
        'lines'                 => 'Lines',
        'requestId'             => 'RequestId',
        'suggestSetDefaultLine' => 'SuggestSetDefaultLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPools) {
            $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toMap() : null;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suggestSetDefaultLine) {
            $res['SuggestSetDefaultLine'] = $this->suggestSetDefaultLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPools'])) {
            $model->addrPools = addrPools::fromMap($map['AddrPools']);
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuggestSetDefaultLine'])) {
            $model->suggestSetDefaultLine = $map['SuggestSetDefaultLine'];
        }

        return $model;
    }
}
