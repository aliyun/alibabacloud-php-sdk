<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule;
use AlibabaCloud\Tea\Model;

class DescribeConfigRuleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configRule
     */
    public $configRule;
    protected $_name = [
        'requestId'  => 'RequestId',
        'configRule' => 'ConfigRule',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('configRule', $this->configRule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configRule) {
            $res['ConfigRule'] = null !== $this->configRule ? $this->configRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigRuleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigRule'])) {
            $model->configRule = configRule::fromMap($map['ConfigRule']);
        }

        return $model;
    }
}
