<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleMarketResponseBody\moduleMarket;
use AlibabaCloud\Tea\Model;

class GetModuleMarketResponseBody extends Model
{
    /**
     * @var moduleMarket
     */
    public $moduleMarket;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'moduleMarket' => 'moduleMarket',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleMarket) {
            $res['moduleMarket'] = null !== $this->moduleMarket ? $this->moduleMarket->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModuleMarketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['moduleMarket'])) {
            $model->moduleMarket = moduleMarket::fromMap($map['moduleMarket']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
