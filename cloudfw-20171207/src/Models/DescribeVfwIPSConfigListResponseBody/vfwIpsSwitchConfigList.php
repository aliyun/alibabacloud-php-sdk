<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVfwIPSConfigListResponseBody;

use AlibabaCloud\Dara\Model;

class vfwIpsSwitchConfigList extends Model
{
    /**
     * @var int
     */
    public $basicRules;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var int
     */
    public $patchRules;

    /**
     * @var int
     */
    public $ruleClass;

    /**
     * @var int
     */
    public $runMode;

    /**
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string[]
     */
    public $vpcFirewallIdList;

    /**
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'basicRules' => 'BasicRules',
        'memberUid' => 'MemberUid',
        'patchRules' => 'PatchRules',
        'ruleClass' => 'RuleClass',
        'runMode' => 'RunMode',
        'vpcFirewallId' => 'VpcFirewallId',
        'vpcFirewallIdList' => 'VpcFirewallIdList',
        'vpcFirewallName' => 'VpcFirewallName',
    ];

    public function validate()
    {
        if (\is_array($this->vpcFirewallIdList)) {
            Model::validateArray($this->vpcFirewallIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->patchRules) {
            $res['PatchRules'] = $this->patchRules;
        }

        if (null !== $this->ruleClass) {
            $res['RuleClass'] = $this->ruleClass;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        if (null !== $this->vpcFirewallIdList) {
            if (\is_array($this->vpcFirewallIdList)) {
                $res['VpcFirewallIdList'] = [];
                $n1 = 0;
                foreach ($this->vpcFirewallIdList as $item1) {
                    $res['VpcFirewallIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
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

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PatchRules'])) {
            $model->patchRules = $map['PatchRules'];
        }

        if (isset($map['RuleClass'])) {
            $model->ruleClass = $map['RuleClass'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        if (isset($map['VpcFirewallIdList'])) {
            if (!empty($map['VpcFirewallIdList'])) {
                $model->vpcFirewallIdList = [];
                $n1 = 0;
                foreach ($map['VpcFirewallIdList'] as $item1) {
                    $model->vpcFirewallIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
