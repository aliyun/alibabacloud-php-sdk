<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenGCResponseBody\data;

use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @example 5.86
     *
     * @var string
     */
    public $GCVolume;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen_gc/gc_11949981_stomach.nii.gz?Expires=1680678697&OSSAccessKeyId=LTAI4GC2dJzdf8ZvnC16****&Signature=EpKCTEPipWO0AiB3Uip85c%2BuMg****
     *
     * @var string
     */
    public $mask;

    /**
     * @example 0.00
     *
     * @var string
     */
    public $nonGCVolume;

    /**
     * @example ["0.1467", "0.8533", "0.0000"]
     *
     * @var string
     */
    public $probabilities;

    /**
     * @example 508.79
     *
     * @var string
     */
    public $stomachVolume;
    protected $_name = [
        'GCVolume'      => 'GCVolume',
        'mask'          => 'Mask',
        'nonGCVolume'   => 'NonGCVolume',
        'probabilities' => 'Probabilities',
        'stomachVolume' => 'StomachVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return lesion
     */
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
