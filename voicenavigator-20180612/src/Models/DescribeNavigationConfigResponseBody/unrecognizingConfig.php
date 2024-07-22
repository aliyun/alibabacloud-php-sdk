<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody;

use AlibabaCloud\Tea\Model;

class unrecognizingConfig extends Model
{
    /**
     * @example TransferToAgent
     *
     * @var string
     */
    public $finalAction;

    /**
     * @example { \\"skillGroupId\\": \\"fallbackSkillGroup\\" }
     *
     * @var string
     */
    public $finalActionParams;

    /**
     * @var string
     */
    public $finalPrompt;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example 3
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'finalAction'       => 'FinalAction',
        'finalActionParams' => 'FinalActionParams',
        'finalPrompt'       => 'FinalPrompt',
        'prompt'            => 'Prompt',
        'threshold'         => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finalAction) {
            $res['FinalAction'] = $this->finalAction;
        }
        if (null !== $this->finalActionParams) {
            $res['FinalActionParams'] = $this->finalActionParams;
        }
        if (null !== $this->finalPrompt) {
            $res['FinalPrompt'] = $this->finalPrompt;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unrecognizingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinalAction'])) {
            $model->finalAction = $map['FinalAction'];
        }
        if (isset($map['FinalActionParams'])) {
            $model->finalActionParams = $map['FinalActionParams'];
        }
        if (isset($map['FinalPrompt'])) {
            $model->finalPrompt = $map['FinalPrompt'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
