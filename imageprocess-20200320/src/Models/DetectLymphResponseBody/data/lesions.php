<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponseBody\data;

use AlibabaCloud\Tea\Model;

class lesions extends Model
{
    /**
     * @var float[]
     */
    public $boxes;

    /**
     * @var float[]
     */
    public $diametermm;

    /**
     * @example 7
     *
     * @var int
     */
    public $keySlice;

    /**
     * @var float[][]
     */
    public $recist;

    /**
     * @example 0.6298
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'boxes'      => 'Boxes',
        'diametermm' => 'Diametermm',
        'keySlice'   => 'KeySlice',
        'recist'     => 'Recist',
        'score'      => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->diametermm) {
            $res['Diametermm'] = $this->diametermm;
        }
        if (null !== $this->keySlice) {
            $res['KeySlice'] = $this->keySlice;
        }
        if (null !== $this->recist) {
            $res['Recist'] = $this->recist;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lesions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Diametermm'])) {
            if (!empty($map['Diametermm'])) {
                $model->diametermm = $map['Diametermm'];
            }
        }
        if (isset($map['KeySlice'])) {
            $model->keySlice = $map['KeySlice'];
        }
        if (isset($map['Recist'])) {
            if (!empty($map['Recist'])) {
                $model->recist = $map['Recist'];
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
