<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails\qrCodePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\qrCodeInfo\qrCodeDetails\qrCodeRect;
use AlibabaCloud\Tea\Model;

class qrCodeDetails extends Model
{
    /**
     * @example “http://www.gsxt.gov.cn/indeXXX”
     *
     * @var mixed
     */
    public $data;

    /**
     * @example 0
     *
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
        'data'         => 'Data',
        'qrCodeAngle'  => 'QrCodeAngle',
        'qrCodePoints' => 'QrCodePoints',
        'qrCodeRect'   => 'QrCodeRect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->qrCodeAngle) {
            $res['QrCodeAngle'] = $this->qrCodeAngle;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['QrCodeAngle'])) {
            $model->qrCodeAngle = $map['QrCodeAngle'];
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

        return $model;
    }
}
