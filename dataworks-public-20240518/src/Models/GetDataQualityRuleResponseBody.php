<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleResponseBody\dataQualityRule;

class GetDataQualityRuleResponseBody extends Model
{
    /**
     * @var dataQualityRule
     */
    public $dataQualityRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityRule' => 'DataQualityRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataQualityRule) {
            $this->dataQualityRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityRule) {
            $res['DataQualityRule'] = null !== $this->dataQualityRule ? $this->dataQualityRule->toArray($noStream) : $this->dataQualityRule;
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
        if (isset($map['DataQualityRule'])) {
            $model->dataQualityRule = dataQualityRule::fromMap($map['DataQualityRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
