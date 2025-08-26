<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data\plates\positions;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data\plates\roi;

class plates extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $plateType;

    /**
     * @var float
     */
    public $plateTypeConfidence;

    /**
     * @var positions[]
     */
    public $positions;

    /**
     * @var roi
     */
    public $roi;
    protected $_name = [
        'confidence' => 'Confidence',
        'plateNumber' => 'PlateNumber',
        'plateType' => 'PlateType',
        'plateTypeConfidence' => 'PlateTypeConfidence',
        'positions' => 'Positions',
        'roi' => 'Roi',
    ];

    public function validate()
    {
        if (\is_array($this->positions)) {
            Model::validateArray($this->positions);
        }
        if (null !== $this->roi) {
            $this->roi->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }

        if (null !== $this->plateType) {
            $res['PlateType'] = $this->plateType;
        }

        if (null !== $this->plateTypeConfidence) {
            $res['PlateTypeConfidence'] = $this->plateTypeConfidence;
        }

        if (null !== $this->positions) {
            if (\is_array($this->positions)) {
                $res['Positions'] = [];
                $n1 = 0;
                foreach ($this->positions as $item1) {
                    $res['Positions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roi) {
            $res['Roi'] = null !== $this->roi ? $this->roi->toArray($noStream) : $this->roi;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }

        if (isset($map['PlateType'])) {
            $model->plateType = $map['PlateType'];
        }

        if (isset($map['PlateTypeConfidence'])) {
            $model->plateTypeConfidence = $map['PlateTypeConfidence'];
        }

        if (isset($map['Positions'])) {
            if (!empty($map['Positions'])) {
                $model->positions = [];
                $n1 = 0;
                foreach ($map['Positions'] as $item1) {
                    $model->positions[$n1] = positions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Roi'])) {
            $model->roi = roi::fromMap($map['Roi']);
        }

        return $model;
    }
}
