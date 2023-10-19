<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class RefundNoticeParam extends Model
{
    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var string
     */
    public $aliyunProduceCode;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mixed
     */
    public $newExpireTime;

    /**
     * @var int[]
     */
    public $orderIds;

    /**
     * @var string[]
     */
    public $refundParamMap;

    /**
     * @var string
     */
    public $refundType;
    protected $_name = [
        'aliuid'            => 'aliuid',
        'aliyunProduceCode' => 'aliyunProduceCode',
        'commodityCode'     => 'commodityCode',
        'instanceId'        => 'instanceId',
        'newExpireTime'     => 'newExpireTime',
        'orderIds'          => 'orderIds',
        'refundParamMap'    => 'refundParamMap',
        'refundType'        => 'refundType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['aliuid'] = $this->aliuid;
        }
        if (null !== $this->aliyunProduceCode) {
            $res['aliyunProduceCode'] = $this->aliyunProduceCode;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->newExpireTime) {
            $res['newExpireTime'] = $this->newExpireTime;
        }
        if (null !== $this->orderIds) {
            $res['orderIds'] = $this->orderIds;
        }
        if (null !== $this->refundParamMap) {
            $res['refundParamMap'] = $this->refundParamMap;
        }
        if (null !== $this->refundType) {
            $res['refundType'] = $this->refundType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundNoticeParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliuid'])) {
            $model->aliuid = $map['aliuid'];
        }
        if (isset($map['aliyunProduceCode'])) {
            $model->aliyunProduceCode = $map['aliyunProduceCode'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['newExpireTime'])) {
            $model->newExpireTime = $map['newExpireTime'];
        }
        if (isset($map['orderIds'])) {
            if (!empty($map['orderIds'])) {
                $model->orderIds = $map['orderIds'];
            }
        }
        if (isset($map['refundParamMap'])) {
            $model->refundParamMap = $map['refundParamMap'];
        }
        if (isset($map['refundType'])) {
            $model->refundType = $map['refundType'];
        }

        return $model;
    }
}
