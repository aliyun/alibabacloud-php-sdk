<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data\plates\positions;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data\plates\roi;
use AlibabaCloud\Tea\Model;

class plates extends Model
{
    /**
     * @example 0.99745339155197144
     *
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
     * @example 1
     *
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
        'confidence'          => 'Confidence',
        'plateNumber'         => 'PlateNumber',
        'plateType'           => 'PlateType',
        'plateTypeConfidence' => 'PlateTypeConfidence',
        'positions'           => 'Positions',
        'roi'                 => 'Roi',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Positions'] = [];
            if (null !== $this->positions && \is_array($this->positions)) {
                $n = 0;
                foreach ($this->positions as $item) {
                    $res['Positions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roi) {
            $res['Roi'] = null !== $this->roi ? $this->roi->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plates
     */
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
                $n                = 0;
                foreach ($map['Positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Roi'])) {
            $model->roi = roi::fromMap($map['Roi']);
        }

        return $model;
    }
}
