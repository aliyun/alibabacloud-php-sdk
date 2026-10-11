<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyConfigurationAttributeResponseBody\defaultRulePhaseActions;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyConfigurationAttributeResponseBody\ruleGroups;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyConfigurationAttributeResponseBody\tags;

class GetEgressProxyConfigurationAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var defaultRulePhaseActions
     */
    public $defaultRulePhaseActions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $egressProxyConfigurationId;

    /**
     * @var string
     */
    public $egressProxyConfigurationName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var ruleGroups[]
     */
    public $ruleGroups;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultRulePhaseActions' => 'DefaultRulePhaseActions',
        'description' => 'Description',
        'egressProxyConfigurationId' => 'EgressProxyConfigurationId',
        'egressProxyConfigurationName' => 'EgressProxyConfigurationName',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleGroups' => 'RuleGroups',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->defaultRulePhaseActions) {
            $this->defaultRulePhaseActions->validate();
        }
        if (\is_array($this->ruleGroups)) {
            Model::validateArray($this->ruleGroups);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultRulePhaseActions) {
            $res['DefaultRulePhaseActions'] = null !== $this->defaultRulePhaseActions ? $this->defaultRulePhaseActions->toArray($noStream) : $this->defaultRulePhaseActions;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressProxyConfigurationId) {
            $res['EgressProxyConfigurationId'] = $this->egressProxyConfigurationId;
        }

        if (null !== $this->egressProxyConfigurationName) {
            $res['EgressProxyConfigurationName'] = $this->egressProxyConfigurationName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->ruleGroups) {
            if (\is_array($this->ruleGroups)) {
                $res['RuleGroups'] = [];
                $n1 = 0;
                foreach ($this->ruleGroups as $item1) {
                    $res['RuleGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultRulePhaseActions'])) {
            $model->defaultRulePhaseActions = defaultRulePhaseActions::fromMap($map['DefaultRulePhaseActions']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressProxyConfigurationId'])) {
            $model->egressProxyConfigurationId = $map['EgressProxyConfigurationId'];
        }

        if (isset($map['EgressProxyConfigurationName'])) {
            $model->egressProxyConfigurationName = $map['EgressProxyConfigurationName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RuleGroups'])) {
            if (!empty($map['RuleGroups'])) {
                $model->ruleGroups = [];
                $n1 = 0;
                foreach ($map['RuleGroups'] as $item1) {
                    $model->ruleGroups[$n1] = ruleGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
