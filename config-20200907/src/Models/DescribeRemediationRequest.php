<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class DescribeRemediationRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleId;
    /**
     * @var string
     */
    public $remediationId;
    protected $_name = [
        'configRuleId'  => 'ConfigRuleId',
        'remediationId' => 'RemediationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
