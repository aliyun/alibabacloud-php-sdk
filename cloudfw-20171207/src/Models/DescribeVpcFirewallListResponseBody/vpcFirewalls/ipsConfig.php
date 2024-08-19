<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls;

use AlibabaCloud\Tea\Model;

class ipsConfig extends Model
{
    /**
     * @description Indicates whether basic protection is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $basicRules;

    /**
     * @description Indicates whether virtual patching is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enableAllPatch;

    /**
     * @var int
     */
    public $ruleClass;

    /**
     * @description The mode of the IPS. Valid values:
     *
     *   **1**: block mode
     *   **0**: monitor mode
     *
     * @example 0
     *
     * @var int
     */
    public $runMode;
    protected $_name = [
        'basicRules'     => 'BasicRules',
        'enableAllPatch' => 'EnableAllPatch',
        'ruleClass'      => 'RuleClass',
        'runMode'        => 'RunMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }
        if (null !== $this->enableAllPatch) {
            $res['EnableAllPatch'] = $this->enableAllPatch;
        }
        if (null !== $this->ruleClass) {
            $res['RuleClass'] = $this->ruleClass;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }
        if (isset($map['EnableAllPatch'])) {
            $model->enableAllPatch = $map['EnableAllPatch'];
        }
        if (isset($map['RuleClass'])) {
            $model->ruleClass = $map['RuleClass'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        return $model;
    }
}
