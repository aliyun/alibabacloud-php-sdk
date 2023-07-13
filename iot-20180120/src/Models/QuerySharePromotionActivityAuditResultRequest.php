<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySharePromotionActivityAuditResultRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $sharePromotionActivityId;

    /**
     * @var string
     */
    public $shareTaskCode;
    protected $_name = [
        'iotInstanceId'            => 'IotInstanceId',
        'sharePromotionActivityId' => 'SharePromotionActivityId',
        'shareTaskCode'            => 'ShareTaskCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->sharePromotionActivityId) {
            $res['SharePromotionActivityId'] = $this->sharePromotionActivityId;
        }
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySharePromotionActivityAuditResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SharePromotionActivityId'])) {
            $model->sharePromotionActivityId = $map['SharePromotionActivityId'];
        }
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }

        return $model;
    }
}
