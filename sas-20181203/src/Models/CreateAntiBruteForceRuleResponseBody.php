<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleResponseBody\createAntiBruteForceRule;

class CreateAntiBruteForceRuleResponseBody extends Model
{
    /**
     * @var createAntiBruteForceRule
     */
    public $createAntiBruteForceRule;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createAntiBruteForceRule' => 'CreateAntiBruteForceRule',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->createAntiBruteForceRule) {
            $this->createAntiBruteForceRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createAntiBruteForceRule) {
            $res['CreateAntiBruteForceRule'] = null !== $this->createAntiBruteForceRule ? $this->createAntiBruteForceRule->toArray($noStream) : $this->createAntiBruteForceRule;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CreateAntiBruteForceRule'])) {
            $model->createAntiBruteForceRule = createAntiBruteForceRule::fromMap($map['CreateAntiBruteForceRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
