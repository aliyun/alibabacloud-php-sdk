<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails\data;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails\stampPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails\stampRect;

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
        'data' => 'Data',
        'stampAngle' => 'StampAngle',
        'stampPoints' => 'StampPoints',
        'stampRect' => 'StampRect',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (\is_array($this->stampPoints)) {
            Model::validateArray($this->stampPoints);
        }
        if (null !== $this->stampRect) {
            $this->stampRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->stampAngle) {
            $res['StampAngle'] = $this->stampAngle;
        }

        if (null !== $this->stampPoints) {
            if (\is_array($this->stampPoints)) {
                $res['StampPoints'] = [];
                $n1 = 0;
                foreach ($this->stampPoints as $item1) {
                    $res['StampPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->stampRect) {
            $res['StampRect'] = null !== $this->stampRect ? $this->stampRect->toArray($noStream) : $this->stampRect;
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
            $model->data = data::fromMap($map['Data']);
        }

        if (isset($map['StampAngle'])) {
            $model->stampAngle = $map['StampAngle'];
        }

        if (isset($map['StampPoints'])) {
            if (!empty($map['StampPoints'])) {
                $model->stampPoints = [];
                $n1 = 0;
                foreach ($map['StampPoints'] as $item1) {
                    $model->stampPoints[$n1++] = stampPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['StampRect'])) {
            $model->stampRect = stampRect::fromMap($map['StampRect']);
        }

        return $model;
    }
}
