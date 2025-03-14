<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetServerlessAuthSummaryRequest extends Model
{
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
        'appRegionId' => 'AppRegionId',
        'machineType' => 'MachineType',
        'vendorType' => 'VendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return GetServerlessAuthSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
