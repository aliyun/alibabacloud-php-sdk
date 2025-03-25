<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponseBody\data;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $keySlice;

    /**
     * @var float[][]
     */
    public $recist;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'boxes' => 'Boxes',
        'diametermm' => 'Diametermm',
        'keySlice' => 'KeySlice',
        'recist' => 'Recist',
        'score' => 'Score',
    ];

    public function validate()
    {
        if (\is_array($this->boxes)) {
            Model::validateArray($this->boxes);
        }
        if (\is_array($this->diametermm)) {
            Model::validateArray($this->diametermm);
        }
        if (\is_array($this->recist)) {
            Model::validateArray($this->recist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boxes) {
            if (\is_array($this->boxes)) {
                $res['Boxes'] = [];
                $n1 = 0;
                foreach ($this->boxes as $item1) {
                    $res['Boxes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->diametermm) {
            if (\is_array($this->diametermm)) {
                $res['Diametermm'] = [];
                $n1 = 0;
                foreach ($this->diametermm as $item1) {
                    $res['Diametermm'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keySlice) {
            $res['KeySlice'] = $this->keySlice;
        }

        if (null !== $this->recist) {
            if (\is_array($this->recist)) {
                $res['Recist'] = [];
                $n1 = 0;
                foreach ($this->recist as $item1) {
                    if (\is_array($item1)) {
                        $res['Recist'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Recist'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n1 = 0;
                foreach ($map['Boxes'] as $item1) {
                    $model->boxes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Diametermm'])) {
            if (!empty($map['Diametermm'])) {
                $model->diametermm = [];
                $n1 = 0;
                foreach ($map['Diametermm'] as $item1) {
                    $model->diametermm[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeySlice'])) {
            $model->keySlice = $map['KeySlice'];
        }

        if (isset($map['Recist'])) {
            if (!empty($map['Recist'])) {
                $model->recist = [];
                $n1 = 0;
                foreach ($map['Recist'] as $item1) {
                    if (!empty($item1)) {
                        $model->recist[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->recist[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
