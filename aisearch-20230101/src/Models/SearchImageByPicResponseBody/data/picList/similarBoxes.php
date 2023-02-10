<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByPicResponseBody\data\picList;

use AlibabaCloud\Tea\Model;

class similarBoxes extends Model
{
    /**
     * @var int[]
     */
    public $bbox;

    /**
     * @example 0.9
     *
     * @var float
     */
    public $confidence;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'bbox'       => 'Bbox',
        'confidence' => 'Confidence',
        'score'      => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bbox) {
            $res['Bbox'] = $this->bbox;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return similarBoxes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bbox'])) {
            if (!empty($map['Bbox'])) {
                $model->bbox = $map['Bbox'];
            }
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
