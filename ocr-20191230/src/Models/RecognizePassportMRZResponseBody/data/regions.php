<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePassportMRZResponseBody\data;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var float
     */
    public $recognitionScore;

    /**
     * @var float
     */
    public $detectionScore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $content;

    /**
     * @var float[]
     */
    public $bandBoxes;
    protected $_name = [
        'recognitionScore' => 'RecognitionScore',
        'detectionScore'   => 'DetectionScore',
        'name'             => 'Name',
        'content'          => 'Content',
        'bandBoxes'        => 'BandBoxes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recognitionScore) {
            $res['RecognitionScore'] = $this->recognitionScore;
        }
        if (null !== $this->detectionScore) {
            $res['DetectionScore'] = $this->detectionScore;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->bandBoxes) {
            $res['BandBoxes'] = $this->bandBoxes;
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
        if (isset($map['RecognitionScore'])) {
            $model->recognitionScore = $map['RecognitionScore'];
        }
        if (isset($map['DetectionScore'])) {
            $model->detectionScore = $map['DetectionScore'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['BandBoxes'])) {
            if (!empty($map['BandBoxes'])) {
                $model->bandBoxes = $map['BandBoxes'];
            }
        }

        return $model;
    }
}
