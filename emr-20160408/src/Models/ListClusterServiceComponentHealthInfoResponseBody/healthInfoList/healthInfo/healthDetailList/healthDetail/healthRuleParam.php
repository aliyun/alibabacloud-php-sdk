<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList\healthDetail;

use AlibabaCloud\Tea\Model;

class healthRuleParam extends Model
{
    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $pass;

    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $hostNames;

    /**
     * @var string
     */
    public $ruleTitle;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'service'         => 'Service',
        'pass'            => 'Pass',
        'component'       => 'Component',
        'hostNames'       => 'HostNames',
        'ruleTitle'       => 'RuleTitle',
        'ruleDescription' => 'RuleDescription',
        'ruleId'          => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->hostNames) {
            $res['HostNames'] = $this->hostNames;
        }
        if (null !== $this->ruleTitle) {
            $res['RuleTitle'] = $this->ruleTitle;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['HostNames'])) {
            $model->hostNames = $map['HostNames'];
        }
        if (isset($map['RuleTitle'])) {
            $model->ruleTitle = $map['RuleTitle'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
