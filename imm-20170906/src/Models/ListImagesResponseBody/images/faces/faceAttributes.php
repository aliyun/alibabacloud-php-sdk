<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\faces;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\faces\faceAttributes\faceBoundary;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images\faces\faceAttributes\headPose;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @var string
     */
    public $beard;

    /**
     * @var float
     */
    public $beardConfidence;

    /**
     * @var faceBoundary
     */
    public $faceBoundary;

    /**
     * @var string
     */
    public $glasses;

    /**
     * @var float
     */
    public $glassesConfidence;

    /**
     * @var headPose
     */
    public $headPose;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var float
     */
    public $maskConfidence;
    protected $_name = [
        'beard'             => 'Beard',
        'beardConfidence'   => 'BeardConfidence',
        'faceBoundary'      => 'FaceBoundary',
        'glasses'           => 'Glasses',
        'glassesConfidence' => 'GlassesConfidence',
        'headPose'          => 'HeadPose',
        'mask'              => 'Mask',
        'maskConfidence'    => 'MaskConfidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beard) {
            $res['Beard'] = $this->beard;
        }
        if (null !== $this->beardConfidence) {
            $res['BeardConfidence'] = $this->beardConfidence;
        }
        if (null !== $this->faceBoundary) {
            $res['FaceBoundary'] = null !== $this->faceBoundary ? $this->faceBoundary->toMap() : null;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->glassesConfidence) {
            $res['GlassesConfidence'] = $this->glassesConfidence;
        }
        if (null !== $this->headPose) {
            $res['HeadPose'] = null !== $this->headPose ? $this->headPose->toMap() : null;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->maskConfidence) {
            $res['MaskConfidence'] = $this->maskConfidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Beard'])) {
            $model->beard = $map['Beard'];
        }
        if (isset($map['BeardConfidence'])) {
            $model->beardConfidence = $map['BeardConfidence'];
        }
        if (isset($map['FaceBoundary'])) {
            $model->faceBoundary = faceBoundary::fromMap($map['FaceBoundary']);
        }
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['GlassesConfidence'])) {
            $model->glassesConfidence = $map['GlassesConfidence'];
        }
        if (isset($map['HeadPose'])) {
            $model->headPose = headPose::fromMap($map['HeadPose']);
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['MaskConfidence'])) {
            $model->maskConfidence = $map['MaskConfidence'];
        }

        return $model;
    }
}
