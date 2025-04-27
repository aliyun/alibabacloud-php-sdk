<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails\qrCodePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails\qrCodeRect;

class qrCodeDetails extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var int
     */
    public $qrCodeAngle;

    /**
     * @var qrCodePoints[]
     */
    public $qrCodePoints;

    /**
     * @var qrCodeRect
     */
    public $qrCodeRect;
    protected $_name = [
        'data' => 'Data',
        'qrCodeAngle' => 'QrCodeAngle',
        'qrCodePoints' => 'QrCodePoints',
        'qrCodeRect' => 'QrCodeRect',
    ];

    public function validate()
    {
        if (\is_array($this->qrCodePoints)) {
            Model::validateArray($this->qrCodePoints);
        }
        if (null !== $this->qrCodeRect) {
            $this->qrCodeRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->qrCodeAngle) {
            $res['QrCodeAngle'] = $this->qrCodeAngle;
        }

        if (null !== $this->qrCodePoints) {
            if (\is_array($this->qrCodePoints)) {
                $res['QrCodePoints'] = [];
                $n1 = 0;
                foreach ($this->qrCodePoints as $item1) {
                    $res['QrCodePoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->qrCodeRect) {
            $res['QrCodeRect'] = null !== $this->qrCodeRect ? $this->qrCodeRect->toArray($noStream) : $this->qrCodeRect;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['QrCodeAngle'])) {
            $model->qrCodeAngle = $map['QrCodeAngle'];
        }

        if (isset($map['QrCodePoints'])) {
            if (!empty($map['QrCodePoints'])) {
                $model->qrCodePoints = [];
                $n1 = 0;
                foreach ($map['QrCodePoints'] as $item1) {
                    $model->qrCodePoints[$n1++] = qrCodePoints::fromMap($item1);
                }
            }
        }

        if (isset($map['QrCodeRect'])) {
            $model->qrCodeRect = qrCodeRect::fromMap($map['QrCodeRect']);
        }

        return $model;
    }
}
