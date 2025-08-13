<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CheckCopyRuleVariableRequest extends Model
{
    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sourceRuleId;

    /**
     * @var string
     */
    public $sourceRuleIds;

    /**
     * @var string
     */
    public $targetEventCode;
    protected $_name = [
        'createType' => 'CreateType',
        'lang' => 'Lang',
        'regId' => 'RegId',
        'sourceRuleId' => 'SourceRuleId',
        'sourceRuleIds' => 'SourceRuleIds',
        'targetEventCode' => 'TargetEventCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->sourceRuleId) {
            $res['SourceRuleId'] = $this->sourceRuleId;
        }

        if (null !== $this->sourceRuleIds) {
            $res['SourceRuleIds'] = $this->sourceRuleIds;
        }

        if (null !== $this->targetEventCode) {
            $res['TargetEventCode'] = $this->targetEventCode;
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
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['SourceRuleId'])) {
            $model->sourceRuleId = $map['SourceRuleId'];
        }

        if (isset($map['SourceRuleIds'])) {
            $model->sourceRuleIds = $map['SourceRuleIds'];
        }

        if (isset($map['TargetEventCode'])) {
            $model->targetEventCode = $map['TargetEventCode'];
        }

        return $model;
    }
}
