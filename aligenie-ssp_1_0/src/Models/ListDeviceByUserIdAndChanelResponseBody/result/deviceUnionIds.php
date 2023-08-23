<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceByUserIdAndChanelResponseBody\result;

use AlibabaCloud\Tea\Model;

class deviceUnionIds extends Model
{
    /**
     * @example 1553*B0C3
     *
     * @var string
     */
    public $deviceUnionId;

    /**
     * @example 1***2
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'deviceUnionId'  => 'DeviceUnionId',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceUnionId) {
            $res['DeviceUnionId'] = $this->deviceUnionId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
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
        if (isset($map['DeviceUnionId'])) {
            $model->deviceUnionId = $map['DeviceUnionId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
