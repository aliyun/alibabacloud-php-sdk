<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeTableAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $assureDirection;

    /**
     * @var bool
     */
    public $hasLine;

    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var bool
     */
    public $skipDetection;

    /**
     * @var bool
     */
    public $useFinanceModel;
    protected $_name = [
        'assureDirection' => 'AssureDirection',
        'hasLine' => 'HasLine',
        'imageURLObject' => 'ImageURL',
        'outputFormat' => 'OutputFormat',
        'skipDetection' => 'SkipDetection',
        'useFinanceModel' => 'UseFinanceModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assureDirection) {
            $res['AssureDirection'] = $this->assureDirection;
        }

        if (null !== $this->hasLine) {
            $res['HasLine'] = $this->hasLine;
        }

        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->skipDetection) {
            $res['SkipDetection'] = $this->skipDetection;
        }

        if (null !== $this->useFinanceModel) {
            $res['UseFinanceModel'] = $this->useFinanceModel;
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
        if (isset($map['AssureDirection'])) {
            $model->assureDirection = $map['AssureDirection'];
        }

        if (isset($map['HasLine'])) {
            $model->hasLine = $map['HasLine'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['SkipDetection'])) {
            $model->skipDetection = $map['SkipDetection'];
        }

        if (isset($map['UseFinanceModel'])) {
            $model->useFinanceModel = $map['UseFinanceModel'];
        }

        return $model;
    }
}
