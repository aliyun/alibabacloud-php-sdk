<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveWhiteListStrategyResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 5DFD6277-CC36-57F7-ACE6-F5952XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the application whitelist policy.
     *
     * @example 8634
     *
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'requestId' => 'RequestId',
        'strategyId' => 'StrategyId',
    ];

    public function validate() {}

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
     * @return SaveWhiteListStrategyResponseBody
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
