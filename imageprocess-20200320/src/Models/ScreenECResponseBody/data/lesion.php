<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenECResponseBody\data;

use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @var string
     */
    public $benignVolume;

    /**
     * @var string
     */
    public $ecVolume;

    /**
     * @var string
     */
    public $esoVolume;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string[]
     */
    public $possibilities;
    protected $_name = [
        'benignVolume'  => 'BenignVolume',
        'ecVolume'      => 'EcVolume',
        'esoVolume'     => 'EsoVolume',
        'mask'          => 'Mask',
        'possibilities' => 'Possibilities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benignVolume) {
            $res['BenignVolume'] = $this->benignVolume;
        }
        if (null !== $this->ecVolume) {
            $res['EcVolume'] = $this->ecVolume;
        }
        if (null !== $this->esoVolume) {
            $res['EsoVolume'] = $this->esoVolume;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->possibilities) {
            $res['Possibilities'] = $this->possibilities;
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
        if (isset($map['BenignVolume'])) {
            $model->benignVolume = $map['BenignVolume'];
        }
        if (isset($map['EcVolume'])) {
            $model->ecVolume = $map['EcVolume'];
        }
        if (isset($map['EsoVolume'])) {
            $model->esoVolume = $map['EsoVolume'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Possibilities'])) {
            if (!empty($map['Possibilities'])) {
                $model->possibilities = $map['Possibilities'];
            }
        }

        return $model;
    }
}
