<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\addrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\lines;

class DescribeGtmAccessStrategyAvailableConfigResponseBody extends Model
{
    /**
     * @var addrPools
     */
    public $addrPools;

    /**
     * @var lines
     */
    public $lines;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $suggestSetDefaultLine;
    protected $_name = [
        'addrPools' => 'AddrPools',
        'lines' => 'Lines',
        'requestId' => 'RequestId',
        'suggestSetDefaultLine' => 'SuggestSetDefaultLine',
    ];

    public function validate()
    {
        if (null !== $this->addrPools) {
            $this->addrPools->validate();
        }
        if (null !== $this->lines) {
            $this->lines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addrPools) {
            $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toArray($noStream) : $this->addrPools;
        }

        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toArray($noStream) : $this->lines;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suggestSetDefaultLine) {
            $res['SuggestSetDefaultLine'] = $this->suggestSetDefaultLine;
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
