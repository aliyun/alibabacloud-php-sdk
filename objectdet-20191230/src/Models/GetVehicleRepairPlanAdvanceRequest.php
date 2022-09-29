<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GetVehicleRepairPlanAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $carNumberImageObject;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var Stream
     */
    public $vinCodeImageObject;
    protected $_name = [
        'carNumberImageObject' => 'CarNumberImage',
        'taskId'               => 'TaskId',
        'vinCodeImageObject'   => 'VinCodeImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carNumberImageObject) {
            $res['CarNumberImage'] = $this->carNumberImageObject;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->vinCodeImageObject) {
            $res['VinCodeImage'] = $this->vinCodeImageObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVehicleRepairPlanAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CarNumberImage'])) {
            $model->carNumberImageObject = $map['CarNumberImage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VinCodeImage'])) {
            $model->vinCodeImageObject = $map['VinCodeImage'];
        }

        return $model;
    }
}
