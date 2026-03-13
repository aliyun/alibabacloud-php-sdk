<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $audioToken;

    /**
     * @var int
     */
    public $imageToken;

    /**
     * @var int
     */
    public $inputToken;

    /**
     * @var int
     */
    public $outputToken;
    protected $_name = [
        'audioToken' => 'audio_token',
        'imageToken' => 'image_token',
        'inputToken' => 'input_token',
        'outputToken' => 'output_token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioToken) {
            $res['audio_token'] = $this->audioToken;
        }

        if (null !== $this->imageToken) {
            $res['image_token'] = $this->imageToken;
        }

        if (null !== $this->inputToken) {
            $res['input_token'] = $this->inputToken;
        }

        if (null !== $this->outputToken) {
            $res['output_token'] = $this->outputToken;
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
        if (isset($map['audio_token'])) {
            $model->audioToken = $map['audio_token'];
        }

        if (isset($map['image_token'])) {
            $model->imageToken = $map['image_token'];
        }

        if (isset($map['input_token'])) {
            $model->inputToken = $map['input_token'];
        }

        if (isset($map['output_token'])) {
            $model->outputToken = $map['output_token'];
        }

        return $model;
    }
}
