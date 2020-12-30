<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleResponseBody\createAntiBruteForceRule;
use AlibabaCloud\Tea\Model;

class CreateAntiBruteForceRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var createAntiBruteForceRule
     */
    public $createAntiBruteForceRule;
    protected $_name = [
        'requestId'                => 'RequestId',
        'createAntiBruteForceRule' => 'CreateAntiBruteForceRule',
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
        if (null !== $this->createAntiBruteForceRule) {
            $res['CreateAntiBruteForceRule'] = null !== $this->createAntiBruteForceRule ? $this->createAntiBruteForceRule->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateAntiBruteForceRule'])) {
            $model->createAntiBruteForceRule = createAntiBruteForceRule::fromMap($map['CreateAntiBruteForceRule']);
        }

        return $model;
    }
}
