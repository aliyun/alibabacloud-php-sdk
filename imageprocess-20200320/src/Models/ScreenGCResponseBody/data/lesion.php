<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenGCResponseBody\data;

use AlibabaCloud\Dara\Model;

class lesion extends Model
{
    /**
     * @var string
     */
    public $GCVolume;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $nonGCVolume;

    /**
     * @var string
     */
    public $probabilities;

    /**
     * @var string
     */
    public $stomachVolume;
    protected $_name = [
        'GCVolume' => 'GCVolume',
        'mask' => 'Mask',
        'nonGCVolume' => 'NonGCVolume',
        'probabilities' => 'Probabilities',
        'stomachVolume' => 'StomachVolume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GCVolume) {
            $res['GCVolume'] = $this->GCVolume;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->nonGCVolume) {
            $res['NonGCVolume'] = $this->nonGCVolume;
        }

        if (null !== $this->probabilities) {
            $res['Probabilities'] = $this->probabilities;
        }

        if (null !== $this->stomachVolume) {
            $res['StomachVolume'] = $this->stomachVolume;
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
        if (isset($map['GCVolume'])) {
            $model->GCVolume = $map['GCVolume'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['NonGCVolume'])) {
            $model->nonGCVolume = $map['NonGCVolume'];
        }

        if (isset($map['Probabilities'])) {
            $model->probabilities = $map['Probabilities'];
        }

        if (isset($map['StomachVolume'])) {
            $model->stomachVolume = $map['StomachVolume'];
        }

        return $model;
    }
}
