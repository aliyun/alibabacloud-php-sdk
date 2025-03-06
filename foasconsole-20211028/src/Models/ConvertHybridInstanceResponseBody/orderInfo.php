<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class orderInfo extends Model
{
    /**
     * @var string
     */
    public $elasticInstanceId;

    /**
     * @example f-cn-zvp2q0zik06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 210406354694567
     *
     * @var int
     */
    public $orderId;
    protected $_name = [
        'elasticInstanceId' => 'ElasticInstanceId',
        'instanceId'        => 'InstanceId',
        'orderId'           => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticInstanceId) {
            $res['ElasticInstanceId'] = $this->elasticInstanceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticInstanceId'])) {
            $model->elasticInstanceId = $map['ElasticInstanceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
