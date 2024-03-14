<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListConfigRulesForTargetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the account group.
     *
     * >  This parameter is returned only if you use the Tag Policy feature in multi-account mode.
     * @example ca-efdc33dc9b37002d****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule.
     *
     * @example cr-0lb4866180880069****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The use scenario of the tag policy. Valid values:
     *
     *   tags: enables tags with specified tag values to be added to resources.
     *   rg_inherit: enables resources in a resource group to automatically inherit tags from the resource group.
     *
     * @example tags
     *
     * @var string
     */
    public $policyType;

    /**
     * @description Indicates whether automatic remediation is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $remediation;

    /**
     * @description The tag key.
     *
     * @example CostCenter
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value for automatic remediation.
     *
     * @example Project
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The ID of the object.
     *
     * @example 134254031178****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the object. Valid values:
     *
     *   USER: the current logon account. This value is available if you use the Tag Policy feature in single-account mode.
     *   ROOT: the Root folder in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   FOLDER: a folder other than the Root folder in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   ACCOUNT: a member in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *
     * @example USER
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'configRuleId' => 'ConfigRuleId',
        'policyType'   => 'PolicyType',
        'remediation'  => 'Remediation',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
        'targetId'     => 'TargetId',
        'targetType'   => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->remediation) {
            $res['Remediation'] = $this->remediation;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Remediation'])) {
            $model->remediation = $map['Remediation'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
