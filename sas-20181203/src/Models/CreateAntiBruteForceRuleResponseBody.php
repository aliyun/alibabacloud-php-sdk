<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleResponseBody\createAntiBruteForceRule;
use AlibabaCloud\Tea\Model;

class CreateAntiBruteForceRuleResponseBody extends Model
{
    /**
     * @var createAntiBruteForceRule
     */
    public $createAntiBruteForceRule;

    /**
     * @example F35F45B0-5D6B-4238-BE02-A62D0760E840
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createAntiBruteForceRule' => 'CreateAntiBruteForceRule',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createAntiBruteForceRule) {
            $res['CreateAntiBruteForceRule'] = null !== $this->createAntiBruteForceRule ? $this->createAntiBruteForceRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAntiBruteForceRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateAntiBruteForceRule'])) {
            $model->createAntiBruteForceRule = createAntiBruteForceRule::fromMap($map['CreateAntiBruteForceRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
