<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyInterceptionRuleSwitchRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * > You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example ce5c29aba99694ade9ba85dc620b4****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The IDs of the rules whose status you want to change. Separate multiple IDs with commas (,).
     *
     * > You can call the [ListInterceptionRulePage](https://help.aliyun.com/document_detail/182997.html) operation to query the IDs of rules.
     * @example 403287
     *
     * @var string
     */
    public $ruleIds;

    /**
     * @description Specifies whether the rule is enabled. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $ruleSwitch;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'ruleIds'    => 'RuleIds',
        'ruleSwitch' => 'RuleSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInterceptionRuleSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }

        return $model;
    }
}
