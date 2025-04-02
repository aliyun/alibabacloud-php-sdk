<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class QueryClusterDetailRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $aclSwitch;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'aclSwitch' => 'AclSwitch',
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
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->aclSwitch) {
            $res['AclSwitch'] = $this->aclSwitch;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AclSwitch'])) {
            $model->aclSwitch = $map['AclSwitch'];
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
