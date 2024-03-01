<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDnsGtmAccessStrategyResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 29D0F8F8-5499-4F6C-9FDC-1EE13BF55925
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the access policy.
     *
     * @example testStrategyId1
     *
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'strategyId' => 'StrategyId',
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
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsGtmAccessStrategyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
