<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectRibFracture;

use AlibabaCloud\Tea\Model;

class detections extends Model
{
    /**
     * @var int
     */
    public $fractureId;

    /**
     * @var float
     */
    public $fractureConfidence;

    /**
     * @var int
     */
    public $fractureCategory;

    /**
     * @var int[]
     */
    public $coordinates;

    /**
     * @var int[]
     */
    public $coordinateImage;

    /**
     * @var string
     */
    public $fractureLocation;

    /**
     * @var int
     */
    public $fractureSegment;
    protected $_name = [
        'fractureId'         => 'FractureId',
        'fractureConfidence' => 'FractureConfidence',
        'fractureCategory'   => 'FractureCategory',
        'coordinates'        => 'Coordinates',
        'coordinateImage'    => 'CoordinateImage',
        'fractureLocation'   => 'FractureLocation',
        'fractureSegment'    => 'FractureSegment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fractureId) {
            $res['FractureId'] = $this->fractureId;
        }
        if (null !== $this->fractureConfidence) {
            $res['FractureConfidence'] = $this->fractureConfidence;
        }
        if (null !== $this->fractureCategory) {
            $res['FractureCategory'] = $this->fractureCategory;
        }
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->coordinateImage) {
            $res['CoordinateImage'] = $this->coordinateImage;
        }
        if (null !== $this->fractureLocation) {
            $res['FractureLocation'] = $this->fractureLocation;
        }
        if (null !== $this->fractureSegment) {
            $res['FractureSegment'] = $this->fractureSegment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FractureId'])) {
            $model->fractureId = $map['FractureId'];
        }
        if (isset($map['FractureConfidence'])) {
            $model->fractureConfidence = $map['FractureConfidence'];
        }
        if (isset($map['FractureCategory'])) {
            $model->fractureCategory = $map['FractureCategory'];
        }
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }
        if (isset($map['CoordinateImage'])) {
            if (!empty($map['CoordinateImage'])) {
                $model->coordinateImage = $map['CoordinateImage'];
            }
        }
        if (isset($map['FractureLocation'])) {
            $model->fractureLocation = $map['FractureLocation'];
        }
        if (isset($map['FractureSegment'])) {
            $model->fractureSegment = $map['FractureSegment'];
        }

        return $model;
    }
}
