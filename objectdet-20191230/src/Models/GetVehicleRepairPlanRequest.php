<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GetVehicleRepairPlanRequest extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $carNumberImage;

    /**
     * @var string
     */
    public $vinCodeImage;
    protected $_name = [
        'taskId'         => 'TaskId',
        'carNumberImage' => 'CarNumberImage',
        'vinCodeImage'   => 'VinCodeImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->carNumberImage) {
            $res['CarNumberImage'] = $this->carNumberImage;
        }
        if (null !== $this->vinCodeImage) {
            $res['VinCodeImage'] = $this->vinCodeImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVehicleRepairPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['CarNumberImage'])) {
            $model->carNumberImage = $map['CarNumberImage'];
        }
        if (isset($map['VinCodeImage'])) {
            $model->vinCodeImage = $map['VinCodeImage'];
        }

        return $model;
    }
}
