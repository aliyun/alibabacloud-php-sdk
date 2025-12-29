<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest;

use AlibabaCloud\Dara\Model;

class updateHotelSceneOperateReq extends Model
{
    /**
     * @var bool
     */
    public $isUseTemplateAnswer;

    /**
     * @var string
     */
    public $operateType;
    protected $_name = [
        'isUseTemplateAnswer' => 'IsUseTemplateAnswer',
        'operateType' => 'OperateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isUseTemplateAnswer) {
            $res['IsUseTemplateAnswer'] = $this->isUseTemplateAnswer;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
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
        if (isset($map['IsUseTemplateAnswer'])) {
            $model->isUseTemplateAnswer = $map['IsUseTemplateAnswer'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        return $model;
    }
}
