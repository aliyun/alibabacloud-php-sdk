<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefaultIPSConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $aiRules;

    /**
     * @var int
     */
    public $basicRules;

    /**
     * @var int
     */
    public $ctiRules;

    /**
     * @var int
     */
    public $enableAllPatch;

    /**
     * @var int
     */
    public $enableDefault;

    /**
     * @var int
     */
    public $patchRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $ruleClass;

    /**
     * @var int
     */
    public $runMode;
    protected $_name = [
        'aiRules'        => 'AiRules',
        'basicRules'     => 'BasicRules',
        'ctiRules'       => 'CtiRules',
        'enableAllPatch' => 'EnableAllPatch',
        'enableDefault'  => 'EnableDefault',
        'patchRules'     => 'PatchRules',
        'requestId'      => 'RequestId',
        'ruleClass'      => 'RuleClass',
        'runMode'        => 'RunMode',
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
