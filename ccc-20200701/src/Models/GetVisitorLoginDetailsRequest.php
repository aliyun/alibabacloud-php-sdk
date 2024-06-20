<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetVisitorLoginDetailsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4c51c9116c36537cb850dc1081d745df
     *
     * @var string
     */
    public $chatDeviceId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9XYGTGWtq2wFi_Bpg7aUnIoYi_vG_rO3b***YtsxbHRHrYHlz1LDBLJAyZcLxieRQR4h_6AnWvTjJeNU5jgxzO*****bHwej7WgWrmA
     *
     * @var string
     */
    public $token;

    /**
     * @description This parameter is required.
     *
     * @example fcd020fe-d8e4-40e5-8c77-1a272a174a7d
     *
     * @var string
     */
    public $visitorId;
    protected $_name = [
        'chatDeviceId' => 'ChatDeviceId',
        'instanceId'   => 'InstanceId',
        'token'        => 'Token',
        'visitorId'    => 'VisitorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatDeviceId) {
            $res['ChatDeviceId'] = $this->chatDeviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->visitorId) {
            $res['VisitorId'] = $this->visitorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVisitorLoginDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatDeviceId'])) {
            $model->chatDeviceId = $map['ChatDeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VisitorId'])) {
            $model->visitorId = $map['VisitorId'];
        }

        return $model;
    }
}
