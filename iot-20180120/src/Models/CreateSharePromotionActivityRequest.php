<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSharePromotionActivityRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $sharePromotionActivityName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'                    => 'EndTime',
        'iotInstanceId'              => 'IotInstanceId',
        'sharePromotionActivityName' => 'SharePromotionActivityName',
        'startTime'                  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->sharePromotionActivityName) {
            $res['SharePromotionActivityName'] = $this->sharePromotionActivityName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSharePromotionActivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SharePromotionActivityName'])) {
            $model->sharePromotionActivityName = $map['SharePromotionActivityName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
