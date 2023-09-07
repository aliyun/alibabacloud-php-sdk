<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails\qrCodePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails\qrCodeRect;
use AlibabaCloud\Tea\Model;

class qrCodeDetails extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int[]
     */
    public $data;

    /**
     * @var qrCodePoints[]
     */
    public $qrCodePoints;

    /**
     * @var qrCodeRect
     */
    public $qrCodeRect;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'angle'        => 'Angle',
        'data'         => 'Data',
        'qrCodePoints' => 'QrCodePoints',
        'qrCodeRect'   => 'QrCodeRect',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->qrCodePoints) {
            $res['QrCodePoints'] = [];
            if (null !== $this->qrCodePoints && \is_array($this->qrCodePoints)) {
                $n = 0;
                foreach ($this->qrCodePoints as $item) {
                    $res['QrCodePoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qrCodeRect) {
            $res['QrCodeRect'] = null !== $this->qrCodeRect ? $this->qrCodeRect->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qrCodeDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['QrCodePoints'])) {
            if (!empty($map['QrCodePoints'])) {
                $model->qrCodePoints = [];
                $n                   = 0;
                foreach ($map['QrCodePoints'] as $item) {
                    $model->qrCodePoints[$n++] = null !== $item ? qrCodePoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QrCodeRect'])) {
            $model->qrCodeRect = qrCodeRect::fromMap($map['QrCodeRect']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
