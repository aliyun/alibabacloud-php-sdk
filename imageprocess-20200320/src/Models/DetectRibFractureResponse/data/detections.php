<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponse\data;

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
     * @var string
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
    protected $_name = [
        'fractureId'         => 'FractureId',
        'fractureConfidence' => 'FractureConfidence',
        'fractureCategory'   => 'FractureCategory',
        'coordinates'        => 'Coordinates',
        'coordinateImage'    => 'CoordinateImage',
    ];

    public function validate()
    {
        Model::validateRequired('fractureId', $this->fractureId, true);
        Model::validateRequired('fractureConfidence', $this->fractureConfidence, true);
        Model::validateRequired('fractureCategory', $this->fractureCategory, true);
        Model::validateRequired('coordinates', $this->coordinates, true);
        Model::validateRequired('coordinateImage', $this->coordinateImage, true);
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

        return $model;
    }
}
