<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class CancelServiceRegistrationRequest extends Model
{
    /**
     * @description Client token, used to ensure the idempotence of requests. Generate a unique value for this parameter from your client to ensure it is unique across different requests. ClientToken supports only ASCII characters.
     *
     * @example AAAAAWns8w4MmhzeptXVRG0PUEU=
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Service registration ID.
     *
     * This parameter is required.
     *
     * @example sr-540930183f93xxxxxx
     *
     * @var string
     */
    public $registrationId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
        'registrationId' => 'RegistrationId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelServiceRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }

        return $model;
    }
}
