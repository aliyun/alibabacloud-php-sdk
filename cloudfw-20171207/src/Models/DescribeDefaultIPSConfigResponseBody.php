<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefaultIPSConfigResponseBody extends Model
{
    /**
     * @description Indicates whether basic protection is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $basicRules;

    /**
     * @description Indicates whether threat intelligence is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $ctiRules;

    /**
     * @description Indicates whether virtual patching is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $patchRules;

    /**
     * @description The request ID.
     *
     * @example 133173B9-8010-5DF5-8B93-********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The level of the rule group for the IPS. Valid values:
     *
     *   **1**: loose
     *   **2**: medium
     *   **3**: strict
     *
     * @example 3
     *
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
        'basicRules' => 'BasicRules',
        'ctiRules'   => 'CtiRules',
        'patchRules' => 'PatchRules',
        'requestId'  => 'RequestId',
        'ruleClass'  => 'RuleClass',
        'runMode'    => 'RunMode',
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
        if (null !== $this->ctiRules) {
            $res['CtiRules'] = $this->ctiRules;
        }
        if (null !== $this->patchRules) {
            $res['PatchRules'] = $this->patchRules;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeDefaultIPSConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }
        if (isset($map['CtiRules'])) {
            $model->ctiRules = $map['CtiRules'];
        }
        if (isset($map['PatchRules'])) {
            $model->patchRules = $map['PatchRules'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
