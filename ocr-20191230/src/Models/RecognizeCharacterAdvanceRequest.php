<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeCharacterAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeCharacter/RecognizeCharacter5.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 10
     *
     * @var int
     */
    public $minHeight;

    /**
     * @example true
     *
     * @var bool
     */
    public $outputProbability;
    protected $_name = [
        'imageURLObject'    => 'ImageURL',
        'minHeight'         => 'MinHeight',
        'outputProbability' => 'OutputProbability',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RecognizeCharacterAdvanceRequest
     */
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
