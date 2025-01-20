<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

class GetAggregateConfigRuleResponseBody extends Model
{
    /**
     * @var configRule
     */
    public $configRule;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRule' => 'ConfigRule',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configRule) {
            $this->configRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRule) {
            $res['ConfigRule'] = null !== $this->configRule ? $this->configRule->toArray($noStream) : $this->configRule;
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
        if (isset($map['ConfigRule'])) {
            $model->configRule = configRule::fromMap($map['ConfigRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
