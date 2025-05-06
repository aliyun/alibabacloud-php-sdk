<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class orderInfo extends Model
{
    /**
     * @var string
     */
    public $elasticInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'elasticInstanceId' => 'ElasticInstanceId',
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
