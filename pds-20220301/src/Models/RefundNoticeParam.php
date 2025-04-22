<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

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
        'aliuid' => 'aliuid',
        'aliyunProduceCode' => 'aliyunProduceCode',
        'commodityCode' => 'commodityCode',
        'instanceId' => 'instanceId',
        'newExpireTime' => 'newExpireTime',
        'orderIds' => 'orderIds',
        'refundParamMap' => 'refundParamMap',
        'refundType' => 'refundType',
    ];

    public function validate()
    {
        if (\is_array($this->orderIds)) {
            Model::validateArray($this->orderIds);
        }
        if (\is_array($this->refundParamMap)) {
            Model::validateArray($this->refundParamMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->orderIds)) {
                $res['orderIds'] = [];
                $n1 = 0;
                foreach ($this->orderIds as $item1) {
                    $res['orderIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->refundParamMap) {
            if (\is_array($this->refundParamMap)) {
                $res['refundParamMap'] = [];
                foreach ($this->refundParamMap as $key1 => $value1) {
                    $res['refundParamMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->refundType) {
            $res['refundType'] = $this->refundType;
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
                $model->orderIds = [];
                $n1 = 0;
                foreach ($map['orderIds'] as $item1) {
                    $model->orderIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['refundParamMap'])) {
            if (!empty($map['refundParamMap'])) {
                $model->refundParamMap = [];
                foreach ($map['refundParamMap'] as $key1 => $value1) {
                    $model->refundParamMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['refundType'])) {
            $model->refundType = $map['refundType'];
        }

        return $model;
    }
}
