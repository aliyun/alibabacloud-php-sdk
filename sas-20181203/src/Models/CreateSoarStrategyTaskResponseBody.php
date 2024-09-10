<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSoarStrategyTaskResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 43313389-DED8-5BB7-8CB9-F22CDEB744DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the policy task.
     *
     * @example 10688
     *
     * @var int
     */
    public $strategyTaskId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'strategyTaskId' => 'StrategyTaskId',
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
        if (null !== $this->strategyTaskId) {
            $res['StrategyTaskId'] = $this->strategyTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSoarStrategyTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyTaskId'])) {
            $model->strategyTaskId = $map['StrategyTaskId'];
        }

        return $model;
    }
}
