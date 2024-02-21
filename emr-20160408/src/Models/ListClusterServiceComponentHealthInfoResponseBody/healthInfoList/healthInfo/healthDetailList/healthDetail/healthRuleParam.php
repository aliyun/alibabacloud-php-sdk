<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList\healthDetail;

use AlibabaCloud\Tea\Model;

class healthRuleParam extends Model
{
    /**
     * @example Ecm-Agent
     *
     * @var string
     */
    public $component;

    /**
     * @example emr-worker-1
     *
     * @var string
     */
    public $hostNames;

    /**
     * @example ""
     *
     * @var string
     */
    public $pass;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @example 111
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example AgentHeartBeatCheck
     *
     * @var string
     */
    public $ruleTitle;

    /**
     * @example YARN
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'component'       => 'Component',
        'hostNames'       => 'HostNames',
        'pass'            => 'Pass',
        'ruleDescription' => 'RuleDescription',
        'ruleId'          => 'RuleId',
        'ruleTitle'       => 'RuleTitle',
        'service'         => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->hostNames) {
            $res['HostNames'] = $this->hostNames;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleTitle) {
            $res['RuleTitle'] = $this->ruleTitle;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthRuleParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['HostNames'])) {
            $model->hostNames = $map['HostNames'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleTitle'])) {
            $model->ruleTitle = $map['RuleTitle'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
