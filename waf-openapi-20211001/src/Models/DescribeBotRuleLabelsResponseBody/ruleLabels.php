<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeBotRuleLabelsResponseBody;

use AlibabaCloud\Dara\Model;

class ruleLabels extends Model
{
    /**
     * @var string
     */
    public $botBehavior;

    /**
     * @var string
     */
    public $defaultAction;

    /**
     * @var string
     */
    public $defaultConfig;

    /**
     * @var int
     */
    public $defaultStatus;

    /**
     * @var string
     */
    public $labelKey;

    /**
     * @var string
     */
    public $labelStatus;

    /**
     * @var string
     */
    public $labelType;

    /**
     * @var string
     */
    public $subScene;
    protected $_name = [
        'botBehavior' => 'BotBehavior',
        'defaultAction' => 'DefaultAction',
        'defaultConfig' => 'DefaultConfig',
        'defaultStatus' => 'DefaultStatus',
        'labelKey' => 'LabelKey',
        'labelStatus' => 'LabelStatus',
        'labelType' => 'LabelType',
        'subScene' => 'SubScene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botBehavior) {
            $res['BotBehavior'] = $this->botBehavior;
        }

        if (null !== $this->defaultAction) {
            $res['DefaultAction'] = $this->defaultAction;
        }

        if (null !== $this->defaultConfig) {
            $res['DefaultConfig'] = $this->defaultConfig;
        }

        if (null !== $this->defaultStatus) {
            $res['DefaultStatus'] = $this->defaultStatus;
        }

        if (null !== $this->labelKey) {
            $res['LabelKey'] = $this->labelKey;
        }

        if (null !== $this->labelStatus) {
            $res['LabelStatus'] = $this->labelStatus;
        }

        if (null !== $this->labelType) {
            $res['LabelType'] = $this->labelType;
        }

        if (null !== $this->subScene) {
            $res['SubScene'] = $this->subScene;
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
        if (isset($map['BotBehavior'])) {
            $model->botBehavior = $map['BotBehavior'];
        }

        if (isset($map['DefaultAction'])) {
            $model->defaultAction = $map['DefaultAction'];
        }

        if (isset($map['DefaultConfig'])) {
            $model->defaultConfig = $map['DefaultConfig'];
        }

        if (isset($map['DefaultStatus'])) {
            $model->defaultStatus = $map['DefaultStatus'];
        }

        if (isset($map['LabelKey'])) {
            $model->labelKey = $map['LabelKey'];
        }

        if (isset($map['LabelStatus'])) {
            $model->labelStatus = $map['LabelStatus'];
        }

        if (isset($map['LabelType'])) {
            $model->labelType = $map['LabelType'];
        }

        if (isset($map['SubScene'])) {
            $model->subScene = $map['SubScene'];
        }

        return $model;
    }
}
