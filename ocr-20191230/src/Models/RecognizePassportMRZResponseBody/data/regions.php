<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePassportMRZResponseBody\data;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var float[]
     */
    public $bandBoxes;

    /**
     * @var string
     */
    public $content;

    /**
     * @var float
     */
    public $detectionScore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $recognitionScore;
    protected $_name = [
        'bandBoxes'        => 'BandBoxes',
        'content'          => 'Content',
        'detectionScore'   => 'DetectionScore',
        'name'             => 'Name',
        'recognitionScore' => 'RecognitionScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandBoxes) {
            $res['BandBoxes'] = $this->bandBoxes;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->detectionScore) {
            $res['DetectionScore'] = $this->detectionScore;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recognitionScore) {
            $res['RecognitionScore'] = $this->recognitionScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandBoxes'])) {
            if (!empty($map['BandBoxes'])) {
                $model->bandBoxes = $map['BandBoxes'];
            }
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DetectionScore'])) {
            $model->detectionScore = $map['DetectionScore'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecognitionScore'])) {
            $model->recognitionScore = $map['RecognitionScore'];
        }

        return $model;
    }
}
