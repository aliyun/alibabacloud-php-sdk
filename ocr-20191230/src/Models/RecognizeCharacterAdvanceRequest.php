<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeCharacterAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $minHeight;

    /**
     * @var bool
     */
    public $outputProbability;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'minHeight' => 'MinHeight',
        'outputProbability' => 'OutputProbability',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->minHeight) {
            $res['MinHeight'] = $this->minHeight;
        }

        if (null !== $this->outputProbability) {
            $res['OutputProbability'] = $this->outputProbability;
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['MinHeight'])) {
            $model->minHeight = $map['MinHeight'];
        }

        if (isset($map['OutputProbability'])) {
            $model->outputProbability = $map['OutputProbability'];
        }

        return $model;
    }
}
