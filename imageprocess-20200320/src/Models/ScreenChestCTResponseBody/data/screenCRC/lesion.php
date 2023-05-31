<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenCRC;

use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @var string
     */
    public $colorectumVolume;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string[]
     */
    public $probabilities;
    protected $_name = [
        'colorectumVolume' => 'ColorectumVolume',
        'mask'             => 'Mask',
        'probabilities'    => 'Probabilities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colorectumVolume) {
            $res['ColorectumVolume'] = $this->colorectumVolume;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->probabilities) {
            $res['Probabilities'] = $this->probabilities;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lesion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColorectumVolume'])) {
            $model->colorectumVolume = $map['ColorectumVolume'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Probabilities'])) {
            if (!empty($map['Probabilities'])) {
                $model->probabilities = $map['Probabilities'];
            }
        }

        return $model;
    }
}
