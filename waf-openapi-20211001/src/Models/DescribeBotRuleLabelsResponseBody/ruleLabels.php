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
    public $labelKey;

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
        'labelKey' => 'LabelKey',
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

        if (null !== $this->labelKey) {
            $res['LabelKey'] = $this->labelKey;
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

        if (isset($map['LabelKey'])) {
            $model->labelKey = $map['LabelKey'];
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
