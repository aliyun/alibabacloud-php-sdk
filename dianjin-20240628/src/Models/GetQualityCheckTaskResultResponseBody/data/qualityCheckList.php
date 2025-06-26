<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\qualityCheckList\originDialogue;

class qualityCheckList extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $checkExplanation;

    /**
     * @var string
     */
    public $checkPassed;

    /**
     * @var string
     */
    public $checkProcess;

    /**
     * @var string
     */
    public $checked;

    /**
     * @var string
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var originDialogue[]
     */
    public $originDialogue;

    /**
     * @var string
     */
    public $qualityGroupId;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var mixed[]
     */
    public $subNodeCol;
    protected $_name = [
        'bizType' => 'bizType',
        'checkExplanation' => 'checkExplanation',
        'checkPassed' => 'checkPassed',
        'checkProcess' => 'checkProcess',
        'checked' => 'checked',
        'gmtEnd' => 'gmtEnd',
        'gmtStart' => 'gmtStart',
        'mode' => 'mode',
        'originDialogue' => 'originDialogue',
        'qualityGroupId' => 'qualityGroupId',
        'ruleDescription' => 'ruleDescription',
        'ruleId' => 'ruleId',
        'ruleType' => 'ruleType',
        'subNodeCol' => 'subNodeCol',
    ];

    public function validate()
    {
        if (\is_array($this->originDialogue)) {
            Model::validateArray($this->originDialogue);
        }
        if (\is_array($this->subNodeCol)) {
            Model::validateArray($this->subNodeCol);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->checkExplanation) {
            $res['checkExplanation'] = $this->checkExplanation;
        }

        if (null !== $this->checkPassed) {
            $res['checkPassed'] = $this->checkPassed;
        }

        if (null !== $this->checkProcess) {
            $res['checkProcess'] = $this->checkProcess;
        }

        if (null !== $this->checked) {
            $res['checked'] = $this->checked;
        }

        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->originDialogue) {
            if (\is_array($this->originDialogue)) {
                $res['originDialogue'] = [];
                $n1 = 0;
                foreach ($this->originDialogue as $item1) {
                    $res['originDialogue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qualityGroupId) {
            $res['qualityGroupId'] = $this->qualityGroupId;
        }

        if (null !== $this->ruleDescription) {
            $res['ruleDescription'] = $this->ruleDescription;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }

        if (null !== $this->subNodeCol) {
            if (\is_array($this->subNodeCol)) {
                $res['subNodeCol'] = [];
                $n1 = 0;
                foreach ($this->subNodeCol as $item1) {
                    $res['subNodeCol'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['checkExplanation'])) {
            $model->checkExplanation = $map['checkExplanation'];
        }

        if (isset($map['checkPassed'])) {
            $model->checkPassed = $map['checkPassed'];
        }

        if (isset($map['checkProcess'])) {
            $model->checkProcess = $map['checkProcess'];
        }

        if (isset($map['checked'])) {
            $model->checked = $map['checked'];
        }

        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }

        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['originDialogue'])) {
            if (!empty($map['originDialogue'])) {
                $model->originDialogue = [];
                $n1 = 0;
                foreach ($map['originDialogue'] as $item1) {
                    $model->originDialogue[$n1] = originDialogue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['qualityGroupId'])) {
            $model->qualityGroupId = $map['qualityGroupId'];
        }

        if (isset($map['ruleDescription'])) {
            $model->ruleDescription = $map['ruleDescription'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }

        if (isset($map['subNodeCol'])) {
            if (!empty($map['subNodeCol'])) {
                $model->subNodeCol = [];
                $n1 = 0;
                foreach ($map['subNodeCol'] as $item1) {
                    $model->subNodeCol[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
