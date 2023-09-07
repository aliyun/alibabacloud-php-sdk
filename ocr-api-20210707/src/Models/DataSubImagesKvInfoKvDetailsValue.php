<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue\valuePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue\valueRect;
use AlibabaCloud\Tea\Model;

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
        'keyName'         => 'KeyName',
        'keyConfidence'   => 'KeyConfidence',
        'value'           => 'Value',
        'valueConfidence' => 'ValueConfidence',
        'valuePoints'     => 'ValuePoints',
        'valueRect'       => 'ValueRect',
        'valueAngle'      => 'ValueAngle',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ValuePoints'] = [];
            if (null !== $this->valuePoints && \is_array($this->valuePoints)) {
                $n = 0;
                foreach ($this->valuePoints as $item) {
                    $res['ValuePoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->valueRect) {
            $res['ValueRect'] = null !== $this->valueRect ? $this->valueRect->toMap() : null;
        }
        if (null !== $this->valueAngle) {
            $res['ValueAngle'] = $this->valueAngle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSubImagesKvInfoKvDetailsValue
     */
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
                $n                  = 0;
                foreach ($map['ValuePoints'] as $item) {
                    $model->valuePoints[$n++] = null !== $item ? valuePoints::fromMap($item) : $item;
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
