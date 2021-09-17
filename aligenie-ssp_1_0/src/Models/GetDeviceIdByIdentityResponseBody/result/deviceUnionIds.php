<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponseBody\result;

use AlibabaCloud\Tea\Model;

class deviceUnionIds extends Model
{
    /**
     * @description 组织id，
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 组织id对应的归一id
     *
     * @var string
     */
    public $deviceUnionId;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'deviceUnionId'  => 'DeviceUnionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->deviceUnionId) {
            $res['DeviceUnionId'] = $this->deviceUnionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceUnionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['DeviceUnionId'])) {
            $model->deviceUnionId = $map['DeviceUnionId'];
        }

        return $model;
    }
}
