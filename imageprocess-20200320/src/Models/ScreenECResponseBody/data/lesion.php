<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenECResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        'benignVolume' => 'BenignVolume',
        'ecVolume' => 'EcVolume',
        'esoVolume' => 'EsoVolume',
        'mask' => 'Mask',
        'possibilities' => 'Possibilities',
    ];

    public function validate()
    {
        if (\is_array($this->possibilities)) {
            Model::validateArray($this->possibilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->possibilities)) {
                $res['Possibilities'] = [];
                $n1 = 0;
                foreach ($this->possibilities as $item1) {
                    $res['Possibilities'][$n1++] = $item1;
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
                $model->possibilities = [];
                $n1 = 0;
                foreach ($map['Possibilities'] as $item1) {
                    $model->possibilities[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
