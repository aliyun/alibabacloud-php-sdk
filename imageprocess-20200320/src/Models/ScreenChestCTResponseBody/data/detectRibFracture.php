<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectRibFracture\detections;
use AlibabaCloud\Tea\Model;

class detectRibFracture extends Model
{
    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-chest-ct/detect-rib-fracture/2022-07-27/2022-07-27-15_15_39-8BBD1C28-383A-548F-AD7D-CB5E0ABA207D_be6ffcb2d2e9494cba8112e07f93f466_ribFracture-mask.nii.gz?Expires=1659165340&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=2lzFDLfGbhVXsHm%2BKhgpglWmA****
     *
     * @var string
     */
    public $fractureMaskURL;

    /**
     * @var float[]
     */
    public $origin;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/detect-rib-fracture/local_test/2020-12-22/result-D5CD101C-F8E5-43CA-9E99-44C783B8F8BE.tar.gz?Expires=1608631727&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=d6c32E1IB4b7Ayo1lpjs%2Bq3Ylv****
     *
     * @var string
     */
    public $resultURL;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/screen-chest-ct/detect-rib-fracture/2022-07-27/2022-07-27-15_15_39-8BBD1C28-383A-548F-AD7D-CB5E0ABA207D_be6ffcb2d2e9494cba8112e07f93f466_ribFracture-ribmask.nii.gz?Expires=1659165340&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5Z%2FCS3B%2B%2Ff6nlBk7alY39LvH3****
     *
     * @var string
     */
    public $ribSegmentMaskURL;

    /**
     * @example 1.2.392.489642.9116.2.6.1.78361.1298784213.1658817546.650139
     *
     * @var string
     */
    public $seriesInstanceUID;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'detections'        => 'Detections',
        'fractureMaskURL'   => 'FractureMaskURL',
        'origin'            => 'Origin',
        'resultURL'         => 'ResultURL',
        'ribSegmentMaskURL' => 'RibSegmentMaskURL',
        'seriesInstanceUID' => 'SeriesInstanceUID',
        'spacing'           => 'Spacing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detections) {
            $res['Detections'] = [];
            if (null !== $this->detections && \is_array($this->detections)) {
                $n = 0;
                foreach ($this->detections as $item) {
                    $res['Detections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fractureMaskURL) {
            $res['FractureMaskURL'] = $this->fractureMaskURL;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }
        if (null !== $this->ribSegmentMaskURL) {
            $res['RibSegmentMaskURL'] = $this->ribSegmentMaskURL;
        }
        if (null !== $this->seriesInstanceUID) {
            $res['SeriesInstanceUID'] = $this->seriesInstanceUID;
        }
        if (null !== $this->spacing) {
            $res['Spacing'] = $this->spacing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectRibFracture
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n                 = 0;
                foreach ($map['Detections'] as $item) {
                    $model->detections[$n++] = null !== $item ? detections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FractureMaskURL'])) {
            $model->fractureMaskURL = $map['FractureMaskURL'];
        }
        if (isset($map['Origin'])) {
            if (!empty($map['Origin'])) {
                $model->origin = $map['Origin'];
            }
        }
        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }
        if (isset($map['RibSegmentMaskURL'])) {
            $model->ribSegmentMaskURL = $map['RibSegmentMaskURL'];
        }
        if (isset($map['SeriesInstanceUID'])) {
            $model->seriesInstanceUID = $map['SeriesInstanceUID'];
        }
        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = $map['Spacing'];
            }
        }

        return $model;
    }
}
