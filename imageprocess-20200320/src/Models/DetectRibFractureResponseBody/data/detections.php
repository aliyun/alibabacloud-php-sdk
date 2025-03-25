<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponseBody\data;

use AlibabaCloud\Dara\Model;

class detections extends Model
{
    /**
     * @var int[]
     */
    public $coordinateImage;

    /**
     * @var int[]
     */
    public $coordinates;

    /**
     * @var string
     */
    public $fracSOPInstanceUID;

    /**
     * @var string
     */
    public $fractureCategory;

    /**
     * @var float
     */
    public $fractureConfidence;

    /**
     * @var int
     */
    public $fractureId;

    /**
     * @var string
     */
    public $fractureLocation;

    /**
     * @var int
     */
    public $fractureSegment;
    protected $_name = [
        'coordinateImage' => 'CoordinateImage',
        'coordinates' => 'Coordinates',
        'fracSOPInstanceUID' => 'FracSOPInstanceUID',
        'fractureCategory' => 'FractureCategory',
        'fractureConfidence' => 'FractureConfidence',
        'fractureId' => 'FractureId',
        'fractureLocation' => 'FractureLocation',
        'fractureSegment' => 'FractureSegment',
    ];

    public function validate()
    {
        if (\is_array($this->coordinateImage)) {
            Model::validateArray($this->coordinateImage);
        }
        if (\is_array($this->coordinates)) {
            Model::validateArray($this->coordinates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinateImage) {
            if (\is_array($this->coordinateImage)) {
                $res['CoordinateImage'] = [];
                $n1 = 0;
                foreach ($this->coordinateImage as $item1) {
                    $res['CoordinateImage'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->coordinates) {
            if (\is_array($this->coordinates)) {
                $res['Coordinates'] = [];
                $n1 = 0;
                foreach ($this->coordinates as $item1) {
                    $res['Coordinates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->fracSOPInstanceUID) {
            $res['FracSOPInstanceUID'] = $this->fracSOPInstanceUID;
        }

        if (null !== $this->fractureCategory) {
            $res['FractureCategory'] = $this->fractureCategory;
        }

        if (null !== $this->fractureConfidence) {
            $res['FractureConfidence'] = $this->fractureConfidence;
        }

        if (null !== $this->fractureId) {
            $res['FractureId'] = $this->fractureId;
        }

        if (null !== $this->fractureLocation) {
            $res['FractureLocation'] = $this->fractureLocation;
        }

        if (null !== $this->fractureSegment) {
            $res['FractureSegment'] = $this->fractureSegment;
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
        if (isset($map['CoordinateImage'])) {
            if (!empty($map['CoordinateImage'])) {
                $model->coordinateImage = [];
                $n1 = 0;
                foreach ($map['CoordinateImage'] as $item1) {
                    $model->coordinateImage[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = [];
                $n1 = 0;
                foreach ($map['Coordinates'] as $item1) {
                    $model->coordinates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FracSOPInstanceUID'])) {
            $model->fracSOPInstanceUID = $map['FracSOPInstanceUID'];
        }

        if (isset($map['FractureCategory'])) {
            $model->fractureCategory = $map['FractureCategory'];
        }

        if (isset($map['FractureConfidence'])) {
            $model->fractureConfidence = $map['FractureConfidence'];
        }

        if (isset($map['FractureId'])) {
            $model->fractureId = $map['FractureId'];
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
