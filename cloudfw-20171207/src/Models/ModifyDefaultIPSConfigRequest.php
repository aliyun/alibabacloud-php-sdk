<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefaultIPSConfigRequest extends Model
{
    /**
     * @var string
     */
    public $aiRules;

    /**
     * @var string
     */
    public $basicRules;

    /**
     * @var string
     */
    public $ctiRules;

    /**
     * @var string
     */
    public $enableAllPatch;

    /**
     * @var string
     */
    public $enableDefault;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $patchRules;

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
    protected $_name = [
        'aiRules'        => 'AiRules',
        'basicRules'     => 'BasicRules',
        'ctiRules'       => 'CtiRules',
        'enableAllPatch' => 'EnableAllPatch',
        'enableDefault'  => 'EnableDefault',
        'lang'           => 'Lang',
        'patchRules'     => 'PatchRules',
        'ruleClass'      => 'RuleClass',
        'runMode'        => 'RunMode',
        'sourceIp'       => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiRules) {
            $res['AiRules'] = $this->aiRules;
        }
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }
        if (null !== $this->ctiRules) {
            $res['CtiRules'] = $this->ctiRules;
        }
        if (null !== $this->enableAllPatch) {
            $res['EnableAllPatch'] = $this->enableAllPatch;
        }
        if (null !== $this->enableDefault) {
            $res['EnableDefault'] = $this->enableDefault;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['AiRules'])) {
            $model->aiRules = $map['AiRules'];
        }
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }
        if (isset($map['CtiRules'])) {
            $model->ctiRules = $map['CtiRules'];
        }
        if (isset($map['EnableAllPatch'])) {
            $model->enableAllPatch = $map['EnableAllPatch'];
        }
        if (isset($map['EnableDefault'])) {
            $model->enableDefault = $map['EnableDefault'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
