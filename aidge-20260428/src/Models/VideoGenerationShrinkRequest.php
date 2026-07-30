<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class VideoGenerationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $intentShrink;

    /**
     * @var string
     */
    public $outputShrink;
    protected $_name = [
        'inputShrink' => 'Input',
        'intentShrink' => 'Intent',
        'outputShrink' => 'Output',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }

        if (null !== $this->intentShrink) {
            $res['Intent'] = $this->intentShrink;
        }

        if (null !== $this->outputShrink) {
            $res['Output'] = $this->outputShrink;
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
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        if (isset($map['Intent'])) {
            $model->intentShrink = $map['Intent'];
        }

        if (isset($map['Output'])) {
            $model->outputShrink = $map['Output'];
        }

        return $model;
    }
}
