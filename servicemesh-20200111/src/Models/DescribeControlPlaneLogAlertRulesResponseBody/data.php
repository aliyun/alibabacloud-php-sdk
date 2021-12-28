<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeControlPlaneLogAlertRulesResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeControlPlaneLogAlertRulesResponseBody\data\info;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actionPolicyId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var info
     */
    public $info;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'actionPolicyId' => 'ActionPolicyId',
        'enabled'        => 'Enabled',
        'info'           => 'Info',
        'ruleId'         => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPolicyId) {
            $res['ActionPolicyId'] = $this->actionPolicyId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionPolicyId'])) {
            $model->actionPolicyId = $map['ActionPolicyId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
