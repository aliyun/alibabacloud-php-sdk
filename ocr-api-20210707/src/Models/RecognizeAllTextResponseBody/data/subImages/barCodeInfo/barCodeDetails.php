<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo\barCodeDetails\barCodePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo\barCodeDetails\barCodeRect;

class barCodeDetails extends Model
{
    /**
     * @var int
     */
    public $barCodeAngle;

    /**
     * @var barCodePoints[]
     */
    public $barCodePoints;

    /**
     * @var barCodeRect
     */
    public $barCodeRect;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'barCodeAngle' => 'BarCodeAngle',
        'barCodePoints' => 'BarCodePoints',
        'barCodeRect' => 'BarCodeRect',
        'data' => 'Data',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->barCodePoints)) {
            Model::validateArray($this->barCodePoints);
        }
        if (null !== $this->barCodeRect) {
            $this->barCodeRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->barCodeAngle) {
            $res['BarCodeAngle'] = $this->barCodeAngle;
        }

        if (null !== $this->barCodePoints) {
            if (\is_array($this->barCodePoints)) {
                $res['BarCodePoints'] = [];
                $n1 = 0;
                foreach ($this->barCodePoints as $item1) {
                    $res['BarCodePoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->barCodeRect) {
            $res['BarCodeRect'] = null !== $this->barCodeRect ? $this->barCodeRect->toArray($noStream) : $this->barCodeRect;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BarCodeAngle'])) {
            $model->barCodeAngle = $map['BarCodeAngle'];
        }

        if (isset($map['BarCodePoints'])) {
            if (!empty($map['BarCodePoints'])) {
                $model->barCodePoints = [];
                $n1 = 0;
                foreach ($map['BarCodePoints'] as $item1) {
                    $model->barCodePoints[$n1++] = barCodePoints::fromMap($item1);
                }
            }
        }

        if (isset($map['BarCodeRect'])) {
            $model->barCodeRect = barCodeRect::fromMap($map['BarCodeRect']);
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
