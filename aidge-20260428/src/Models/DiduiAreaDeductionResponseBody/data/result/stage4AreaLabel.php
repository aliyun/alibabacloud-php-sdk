<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class stage4AreaLabel extends Model
{
    /**
     * @var float
     */
    public $areaM2;

    /**
     * @var float
     */
    public $leftEdgeM;

    /**
     * @var float
     */
    public $rightEdgeM;
    protected $_name = [
        'areaM2' => 'AreaM2',
        'leftEdgeM' => 'LeftEdgeM',
        'rightEdgeM' => 'RightEdgeM',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaM2) {
            $res['AreaM2'] = $this->areaM2;
        }

        if (null !== $this->leftEdgeM) {
            $res['LeftEdgeM'] = $this->leftEdgeM;
        }

        if (null !== $this->rightEdgeM) {
            $res['RightEdgeM'] = $this->rightEdgeM;
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
        if (isset($map['AreaM2'])) {
            $model->areaM2 = $map['AreaM2'];
        }

        if (isset($map['LeftEdgeM'])) {
            $model->leftEdgeM = $map['LeftEdgeM'];
        }

        if (isset($map['RightEdgeM'])) {
            $model->rightEdgeM = $map['RightEdgeM'];
        }

        return $model;
    }
}
