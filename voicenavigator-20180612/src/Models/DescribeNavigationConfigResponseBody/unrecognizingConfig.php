<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody;

use AlibabaCloud\Tea\Model;

class unrecognizingConfig extends Model
{
    /**
     * @var string
     */
    public $finalPrompt;

    /**
     * @var string
     */
    public $finalAction;

    /**
     * @var string
     */
    public $finalActionParams;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $prompt;
    protected $_name = [
        'finalPrompt'       => 'FinalPrompt',
        'finalAction'       => 'FinalAction',
        'finalActionParams' => 'FinalActionParams',
        'threshold'         => 'Threshold',
        'prompt'            => 'Prompt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finalPrompt) {
            $res['FinalPrompt'] = $this->finalPrompt;
        }
        if (null !== $this->finalAction) {
            $res['FinalAction'] = $this->finalAction;
        }
        if (null !== $this->finalActionParams) {
            $res['FinalActionParams'] = $this->finalActionParams;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
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
        if (isset($map['FinalPrompt'])) {
            $model->finalPrompt = $map['FinalPrompt'];
        }
        if (isset($map['FinalAction'])) {
            $model->finalAction = $map['FinalAction'];
        }
        if (isset($map['FinalActionParams'])) {
            $model->finalActionParams = $map['FinalActionParams'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        return $model;
    }
}
