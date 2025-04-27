<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue\valuePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue\valueRect;

class DataSubImagesKvInfoKvDetailsValue extends Model
{
    /**
     * @var string
     */
    public $keyName;

    /**
     * @var int
     */
    public $keyConfidence;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $valueConfidence;

    /**
     * @var valuePoints[]
     */
    public $valuePoints;

    /**
     * @var valueRect
     */
    public $valueRect;

    /**
     * @var int
     */
    public $valueAngle;
    protected $_name = [
        'keyName' => 'KeyName',
        'keyConfidence' => 'KeyConfidence',
        'value' => 'Value',
        'valueConfidence' => 'ValueConfidence',
        'valuePoints' => 'ValuePoints',
        'valueRect' => 'ValueRect',
        'valueAngle' => 'ValueAngle',
    ];

    public function validate()
    {
        if (\is_array($this->valuePoints)) {
            Model::validateArray($this->valuePoints);
        }
        if (null !== $this->valueRect) {
            $this->valueRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyConfidence) {
            $res['KeyConfidence'] = $this->keyConfidence;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueConfidence) {
            $res['ValueConfidence'] = $this->valueConfidence;
        }

        if (null !== $this->valuePoints) {
            if (\is_array($this->valuePoints)) {
                $res['ValuePoints'] = [];
                $n1 = 0;
                foreach ($this->valuePoints as $item1) {
                    $res['ValuePoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->valueRect) {
            $res['ValueRect'] = null !== $this->valueRect ? $this->valueRect->toArray($noStream) : $this->valueRect;
        }

        if (null !== $this->valueAngle) {
            $res['ValueAngle'] = $this->valueAngle;
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
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyConfidence'])) {
            $model->keyConfidence = $map['KeyConfidence'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueConfidence'])) {
            $model->valueConfidence = $map['ValueConfidence'];
        }

        if (isset($map['ValuePoints'])) {
            if (!empty($map['ValuePoints'])) {
                $model->valuePoints = [];
                $n1 = 0;
                foreach ($map['ValuePoints'] as $item1) {
                    $model->valuePoints[$n1++] = valuePoints::fromMap($item1);
                }
            }
        }

        if (isset($map['ValueRect'])) {
            $model->valueRect = valueRect::fromMap($map['ValueRect']);
        }

        if (isset($map['ValueAngle'])) {
            $model->valueAngle = $map['ValueAngle'];
        }

        return $model;
    }
}
