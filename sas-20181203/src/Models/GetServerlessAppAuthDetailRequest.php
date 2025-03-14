<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetServerlessAppAuthDetailRequest extends Model
{
    /**
     * @description SAE application ID.
     *
     * > Obtain through the [ListMachineApps](~~ListMachineApps~~) interface.
     *
     * @example 3de9f2ac-f***769226df
     *
     * @var string
     */
    public $appId;

    /**
     * @description Application region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $appRegionId;

    /**
     * @description Server type:
     * - **RunD**
     * - **ECI**
     *
     * @example RunD
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Cloud product:
     * - **ASK**
     * - **SAE**
     * - **ACS**
     *
     * @example SAE
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'appId' => 'AppId',
        'appRegionId' => 'AppRegionId',
        'machineType' => 'MachineType',
        'vendorType' => 'VendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appRegionId) {
            $res['AppRegionId'] = $this->appRegionId;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->vendorType) {
            $res['VendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServerlessAppAuthDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppRegionId'])) {
            $model->appRegionId = $map['AppRegionId'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['VendorType'])) {
            $model->vendorType = $map['VendorType'];
        }

        return $model;
    }
}
