<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class StartConfigRuleEvaluationRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var bool
     */
    public $multiAccount;

    /**
     * @var int
     */
    public $memberId;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
        'multiAccount' => 'MultiAccount',
        'memberId'     => 'MemberId',
    ];

    public function validate()
    {
        Model::validateRequired('configRuleId', $this->configRuleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->multiAccount) {
            $res['MultiAccount'] = $this->multiAccount;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartConfigRuleEvaluationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['MultiAccount'])) {
            $model->multiAccount = $map['MultiAccount'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        return $model;
    }
}
