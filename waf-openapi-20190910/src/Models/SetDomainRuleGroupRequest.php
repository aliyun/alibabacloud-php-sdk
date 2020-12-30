<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetDomainRuleGroupRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $domains;

    /**
     * @var int
     */
    public $ruleGroupId;

    /**
     * @var int
     */
    public $wafVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'lang'            => 'Lang',
        'domains'         => 'Domains',
        'ruleGroupId'     => 'RuleGroupId',
        'wafVersion'      => 'WafVersion',
        'instanceId'      => 'InstanceId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }
        if (null !== $this->wafVersion) {
            $res['WafVersion'] = $this->wafVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainRuleGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }
        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }
        if (isset($map['WafVersion'])) {
            $model->wafVersion = $map['WafVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
