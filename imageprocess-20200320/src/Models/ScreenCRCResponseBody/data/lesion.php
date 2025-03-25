<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCResponseBody\data;

use AlibabaCloud\Dara\Model;

class lesion extends Model
{
    /**
     * @var string
     */
    public $CRCVolume;

    /**
     * @var string
     */
    public $colorectumVolume;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $probabilities;
    protected $_name = [
        'CRCVolume' => 'CRCVolume',
        'colorectumVolume' => 'ColorectumVolume',
        'mask' => 'Mask',
        'probabilities' => 'Probabilities',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CRCVolume) {
            $res['CRCVolume'] = $this->CRCVolume;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CRCVolume'])) {
            $model->CRCVolume = $map['CRCVolume'];
        }

        if (isset($map['ColorectumVolume'])) {
            $model->colorectumVolume = $map['ColorectumVolume'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['Probabilities'])) {
            $model->probabilities = $map['Probabilities'];
        }

        return $model;
    }
}
