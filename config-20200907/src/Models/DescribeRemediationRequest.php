<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DescribeRemediationRequest extends Model
{
    /**
     * @example cr-3184626622af003****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @example crr-f381cf0c1c2f004e****
     *
     * @var string
     */
    public $remediationId;
    protected $_name = [
        'configRuleId'  => 'ConfigRuleId',
        'remediationId' => 'RemediationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRemediationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }

        return $model;
    }
}
