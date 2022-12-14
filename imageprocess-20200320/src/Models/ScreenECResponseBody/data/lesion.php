<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenECResponseBody\data;

use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $benignVolume;

    /**
     * @example 0
     *
     * @var string
     */
    public $ecVolume;

    /**
     * @example 26814
     *
     * @var string
     */
    public $esoVolume;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****
     *
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
