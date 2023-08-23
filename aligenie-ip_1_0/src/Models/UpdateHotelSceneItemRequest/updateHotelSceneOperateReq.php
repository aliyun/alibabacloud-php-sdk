<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest;

use AlibabaCloud\Tea\Model;

class updateHotelSceneOperateReq extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isUseTemplateAnswer;

    /**
     * @example OPEN
     *
     * @var string
     */
    public $operateType;
    protected $_name = [
        'isUseTemplateAnswer' => 'IsUseTemplateAnswer',
        'operateType'         => 'OperateType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return updateHotelSceneOperateReq
     */
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
