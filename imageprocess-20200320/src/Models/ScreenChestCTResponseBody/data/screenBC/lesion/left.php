<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC\lesion;

use AlibabaCloud\Dara\Model;

class left extends Model
{
    /**
     * @var string
     */
    public $BCVolume;

    /**
     * @var string
     */
    public $breastVolume;

    /**
     * @var string[]
     */
    public $probabilities;
    protected $_name = [
        'BCVolume' => 'BCVolume',
        'breastVolume' => 'BreastVolume',
        'probabilities' => 'Probabilities',
    ];

    public function validate()
    {
        if (\is_array($this->probabilities)) {
            Model::validateArray($this->probabilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->BCVolume) {
            $res['BCVolume'] = $this->BCVolume;
        }

        if (null !== $this->breastVolume) {
            $res['BreastVolume'] = $this->breastVolume;
        }

        if (null !== $this->probabilities) {
            if (\is_array($this->probabilities)) {
                $res['Probabilities'] = [];
                $n1 = 0;
                foreach ($this->probabilities as $item1) {
                    $res['Probabilities'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BCVolume'])) {
            $model->BCVolume = $map['BCVolume'];
        }

        if (isset($map['BreastVolume'])) {
            $model->breastVolume = $map['BreastVolume'];
        }

        if (isset($map['Probabilities'])) {
            if (!empty($map['Probabilities'])) {
                $model->probabilities = [];
                $n1 = 0;
                foreach ($map['Probabilities'] as $item1) {
                    $model->probabilities[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
