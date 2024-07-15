<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest\licenseData;
use AlibabaCloud\Tea\Model;

class UpdateServiceInstanceAttributeRequest extends Model
{
    /**
     * @description The time when the service instance expires.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     * @example 2023-12-25T02:28:40Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var licenseData
     */
    public $licenseData;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service instance ID.
     *
     * This parameter is required.
     * @example si-3df88e962cdexxxxxxxx
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'endTime'           => 'EndTime',
        'licenseData'       => 'LicenseData',
        'regionId'          => 'RegionId',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->licenseData) {
            $res['LicenseData'] = null !== $this->licenseData ? $this->licenseData->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LicenseData'])) {
            $model->licenseData = licenseData::fromMap($map['LicenseData']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
