<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyDefaultIPSConfigRequest extends Model
{
    /**
     * @var int
     */
    public $basicRules;

    /**
     * @var int
     */
    public $ctiRules;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxSdl;

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
    protected $_name = [
        'basicRules' => 'BasicRules',
        'ctiRules' => 'CtiRules',
        'lang' => 'Lang',
        'maxSdl' => 'MaxSdl',
        'patchRules' => 'PatchRules',
        'ruleClass' => 'RuleClass',
        'runMode' => 'RunMode',
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
