<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefaultIPSConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable basic protection. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $basicRules;

    /**
     * @description Specifies whether to enable threat intelligence. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $ctiRules;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** (default)
     *   **en**
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxSdl;

    /**
     * @description Specifies whether to enable virtual patching. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var string
     */
    public $patchRules;

    /**
     * @description The level of the rule group for the IPS. Valid values:
     *
     *   **1**: loose
     *   **2**: medium
     *   **3**: strict
     *
     * @example 1
     *
     * @var string
     */
    public $ruleClass;

    /**
     * @description The mode of the IPS. Valid values:
     *
     *   **1**: block mode
     *   **0**: monitor mode
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $runMode;
    protected $_name = [
        'basicRules' => 'BasicRules',
        'ctiRules'   => 'CtiRules',
        'lang'       => 'Lang',
        'maxSdl'     => 'MaxSdl',
        'patchRules' => 'PatchRules',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->maxSdl) {
            $res['MaxSdl'] = $this->maxSdl;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefaultIPSConfigRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MaxSdl'])) {
            $model->maxSdl = $map['MaxSdl'];
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

        return $model;
    }
}
