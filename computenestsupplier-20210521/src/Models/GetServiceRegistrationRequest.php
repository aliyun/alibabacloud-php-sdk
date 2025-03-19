<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetServiceRegistrationRequest extends Model
{
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
     * @example sr-1b4aabc1c9eb4109****
     *
     * @var string
     */
    public $registrationId;
    protected $_name = [
        'regionId' => 'RegionId',
        'registrationId' => 'RegistrationId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return GetServiceRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }

        return $model;
    }
}
