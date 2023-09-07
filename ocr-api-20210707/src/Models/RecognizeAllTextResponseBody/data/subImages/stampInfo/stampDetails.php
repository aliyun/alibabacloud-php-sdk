<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails\data;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails\stampPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails\stampRect;
use AlibabaCloud\Tea\Model;

class stampDetails extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var int
     */
    public $stampAngle;

    /**
     * @var stampPoints[]
     */
    public $stampPoints;

    /**
     * @var stampRect
     */
    public $stampRect;
    protected $_name = [
        'data'        => 'Data',
        'stampAngle'  => 'StampAngle',
        'stampPoints' => 'StampPoints',
        'stampRect'   => 'StampRect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->stampAngle) {
            $res['StampAngle'] = $this->stampAngle;
        }
        if (null !== $this->stampPoints) {
            $res['StampPoints'] = [];
            if (null !== $this->stampPoints && \is_array($this->stampPoints)) {
                $n = 0;
                foreach ($this->stampPoints as $item) {
                    $res['StampPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stampRect) {
            $res['StampRect'] = null !== $this->stampRect ? $this->stampRect->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stampDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['StampAngle'])) {
            $model->stampAngle = $map['StampAngle'];
        }
        if (isset($map['StampPoints'])) {
            if (!empty($map['StampPoints'])) {
                $model->stampPoints = [];
                $n                  = 0;
                foreach ($map['StampPoints'] as $item) {
                    $model->stampPoints[$n++] = null !== $item ? stampPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StampRect'])) {
            $model->stampRect = stampRect::fromMap($map['StampRect']);
        }

        return $model;
    }
}
