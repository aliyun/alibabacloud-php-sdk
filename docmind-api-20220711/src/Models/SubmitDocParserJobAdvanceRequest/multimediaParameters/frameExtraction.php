<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobAdvanceRequest\multimediaParameters;

use AlibabaCloud\Dara\Model;

class frameExtraction extends Model
{
    /**
     * @var float
     */
    public $frameRate;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $outputImageHeight;

    /**
     * @var int
     */
    public $outputImageWidth;
    protected $_name = [
        'frameRate' => 'FrameRate',
        'mode' => 'Mode',
        'outputImageHeight' => 'OutputImageHeight',
        'outputImageWidth' => 'OutputImageWidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->outputImageHeight) {
            $res['OutputImageHeight'] = $this->outputImageHeight;
        }

        if (null !== $this->outputImageWidth) {
            $res['OutputImageWidth'] = $this->outputImageWidth;
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
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['OutputImageHeight'])) {
            $model->outputImageHeight = $map['OutputImageHeight'];
        }

        if (isset($map['OutputImageWidth'])) {
            $model->outputImageWidth = $map['OutputImageWidth'];
        }

        return $model;
    }
}
