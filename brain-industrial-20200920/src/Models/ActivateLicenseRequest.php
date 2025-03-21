<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ActivateLicenseRequest extends Model
{
    /**
     * @example XXX
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description ID
     *
     * @var string
     */
    public $id;

    /**
     * @example 12bea6b4489fsde7b903fe05934a0adx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'fingerprint' => 'Fingerprint',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return ActivateLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
