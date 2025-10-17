<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rayConfig\appConfig;

use AlibabaCloud\Dara\Model;

class imageSelector extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $inferenceEngine;

    /**
     * @var string
     */
    public $llmModel;
    protected $_name = [
        'image' => 'Image',
        'inferenceEngine' => 'InferenceEngine',
        'llmModel' => 'LlmModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->inferenceEngine) {
            $res['InferenceEngine'] = $this->inferenceEngine;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
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
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['InferenceEngine'])) {
            $model->inferenceEngine = $map['InferenceEngine'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        return $model;
    }
}
