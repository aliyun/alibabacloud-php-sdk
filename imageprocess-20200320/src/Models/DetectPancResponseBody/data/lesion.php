<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectPancResponseBody\data;

use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-pdac/2022-05-25_14%3A33%3A30/4CA2BF25-BCDB-9C6C-B14C-EB41E8266588.nii.gz?Expires=1653462210&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=8t%2FknUrQyyyCU2p7QhMC%2BXBCR****
     *
     * @var string
     */
    public $mask;

    /**
     * @example 0
     *
     * @var string
     */
    public $nonPdacVol;

    /**
     * @example 0
     *
     * @var string
     */
    public $pancVol;

    /**
     * @example 0
     *
     * @var string
     */
    public $pdacVol;

    /**
     * @var string[]
     */
    public $possibilities;
    protected $_name = [
        'mask'          => 'Mask',
        'nonPdacVol'    => 'NonPdacVol',
        'pancVol'       => 'PancVol',
        'pdacVol'       => 'PdacVol',
        'possibilities' => 'Possibilities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->nonPdacVol) {
            $res['NonPdacVol'] = $this->nonPdacVol;
        }
        if (null !== $this->pancVol) {
            $res['PancVol'] = $this->pancVol;
        }
        if (null !== $this->pdacVol) {
            $res['PdacVol'] = $this->pdacVol;
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
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['NonPdacVol'])) {
            $model->nonPdacVol = $map['NonPdacVol'];
        }
        if (isset($map['PancVol'])) {
            $model->pancVol = $map['PancVol'];
        }
        if (isset($map['PdacVol'])) {
            $model->pdacVol = $map['PdacVol'];
        }
        if (isset($map['Possibilities'])) {
            if (!empty($map['Possibilities'])) {
                $model->possibilities = $map['Possibilities'];
            }
        }

        return $model;
    }
}
