<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCResponseBody\data;

use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @example 7.83
     *
     * @var string
     */
    public $CRCVolume;

    /**
     * @example 255.93
     *
     * @var string
     */
    public $colorectumVolume;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_crc/crc_case2_pre.nii.gz?Expires=1680766116&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16MFC7&Signature=9n9C%2B2MnyvLwAC%2FwFyxgY********
     *
     * @var string
     */
    public $mask;

    /**
     * @example 0.0779, 0.9221
     *
     * @var string
     */
    public $probabilities;
    protected $_name = [
        'CRCVolume'        => 'CRCVolume',
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

    /**
     * @param array $map
     *
     * @return lesion
     */
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
