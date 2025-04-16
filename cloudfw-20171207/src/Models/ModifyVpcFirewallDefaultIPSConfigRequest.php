<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyVpcFirewallDefaultIPSConfigRequest extends Model
{
    /**
     * @var string
     */
    public $basicRules;

    /**
     * @var string
     */
    public $enableAllPatch;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $ruleClass;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'basicRules' => 'BasicRules',
        'enableAllPatch' => 'EnableAllPatch',
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'ruleClass' => 'RuleClass',
        'runMode' => 'RunMode',
        'sourceIp' => 'SourceIp',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }

        if (null !== $this->enableAllPatch) {
            $res['EnableAllPatch'] = $this->enableAllPatch;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->ruleClass) {
            $res['RuleClass'] = $this->ruleClass;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
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
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }

        if (isset($map['EnableAllPatch'])) {
            $model->enableAllPatch = $map['EnableAllPatch'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['RuleClass'])) {
            $model->ruleClass = $map['RuleClass'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
