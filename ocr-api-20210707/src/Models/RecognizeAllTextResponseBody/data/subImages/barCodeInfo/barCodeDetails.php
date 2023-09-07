<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo\barCodeDetails\barCodePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo\barCodeDetails\barCodeRect;
use AlibabaCloud\Tea\Model;

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
     * @var int[]
     */
    public $data;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'barCodeAngle'  => 'BarCodeAngle',
        'barCodePoints' => 'BarCodePoints',
        'barCodeRect'   => 'BarCodeRect',
        'data'          => 'Data',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->barCodeAngle) {
            $res['BarCodeAngle'] = $this->barCodeAngle;
        }
        if (null !== $this->barCodePoints) {
            $res['BarCodePoints'] = [];
            if (null !== $this->barCodePoints && \is_array($this->barCodePoints)) {
                $n = 0;
                foreach ($this->barCodePoints as $item) {
                    $res['BarCodePoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->barCodeRect) {
            $res['BarCodeRect'] = null !== $this->barCodeRect ? $this->barCodeRect->toMap() : null;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return barCodeDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BarCodeAngle'])) {
            $model->barCodeAngle = $map['BarCodeAngle'];
        }
        if (isset($map['BarCodePoints'])) {
            if (!empty($map['BarCodePoints'])) {
                $model->barCodePoints = [];
                $n                    = 0;
                foreach ($map['BarCodePoints'] as $item) {
                    $model->barCodePoints[$n++] = null !== $item ? barCodePoints::fromMap($item) : $item;
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
