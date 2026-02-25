<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class TogglePublicSlbRequest extends Model
{
    /**
     * @var bool
     */
    public $enablePublicSlb;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'enablePublicSlb' => 'EnablePublicSlb',
        'gatewayId' => 'GatewayId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePublicSlb) {
            $res['EnablePublicSlb'] = $this->enablePublicSlb;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['EnablePublicSlb'])) {
            $model->enablePublicSlb = $map['EnablePublicSlb'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
