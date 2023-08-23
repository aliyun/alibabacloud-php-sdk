<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ResultValue;

use AlibabaCloud\Tea\Model;

class deviceUnionIds extends Model
{
    /**
     * @example 1**2
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 1553*B0C3
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
