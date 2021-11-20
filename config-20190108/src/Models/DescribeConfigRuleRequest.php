<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigRuleRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var bool
     */
    public $multiAccount;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
        'memberId'     => 'MemberId',
        'multiAccount' => 'MultiAccount',
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
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->multiAccount) {
            $res['MultiAccount'] = $this->multiAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MultiAccount'])) {
            $model->multiAccount = $map['MultiAccount'];
        }

        return $model;
    }
}
