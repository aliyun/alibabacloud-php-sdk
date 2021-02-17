<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images\faces;

use AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images\faces\faceAttributes\faceBoundary;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images\faces\faceAttributes\headPose;
use AlibabaCloud\Tea\Model;

class faceAttributes extends Model
{
    /**
     * @var float
     */
    public $glassesConfidence;

    /**
     * @var string
     */
    public $glasses;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var float
     */
    public $beardConfidence;

    /**
     * @var float
     */
    public $maskConfidence;

    /**
     * @var faceBoundary
     */
    public $faceBoundary;

    /**
     * @var headPose
     */
    public $headPose;

    /**
     * @var string
     */
    public $beard;
    protected $_name = [
        'glassesConfidence' => 'GlassesConfidence',
        'glasses'           => 'Glasses',
        'mask'              => 'Mask',
        'beardConfidence'   => 'BeardConfidence',
        'maskConfidence'    => 'MaskConfidence',
        'faceBoundary'      => 'FaceBoundary',
        'headPose'          => 'HeadPose',
        'beard'             => 'Beard',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->glassesConfidence) {
            $res['GlassesConfidence'] = $this->glassesConfidence;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->beardConfidence) {
            $res['BeardConfidence'] = $this->beardConfidence;
        }
        if (null !== $this->maskConfidence) {
            $res['MaskConfidence'] = $this->maskConfidence;
        }
        if (null !== $this->faceBoundary) {
            $res['FaceBoundary'] = null !== $this->faceBoundary ? $this->faceBoundary->toMap() : null;
        }
        if (null !== $this->headPose) {
            $res['HeadPose'] = null !== $this->headPose ? $this->headPose->toMap() : null;
        }
        if (null !== $this->beard) {
            $res['Beard'] = $this->beard;
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
        if (isset($map['GlassesConfidence'])) {
            $model->glassesConfidence = $map['GlassesConfidence'];
        }
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['BeardConfidence'])) {
            $model->beardConfidence = $map['BeardConfidence'];
        }
        if (isset($map['MaskConfidence'])) {
            $model->maskConfidence = $map['MaskConfidence'];
        }
        if (isset($map['FaceBoundary'])) {
            $model->faceBoundary = faceBoundary::fromMap($map['FaceBoundary']);
        }
        if (isset($map['HeadPose'])) {
            $model->headPose = headPose::fromMap($map['HeadPose']);
        }
        if (isset($map['Beard'])) {
            $model->beard = $map['Beard'];
        }

        return $model;
    }
}
