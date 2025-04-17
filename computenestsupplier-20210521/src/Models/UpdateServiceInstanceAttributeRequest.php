<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest\licenseData;

class UpdateServiceInstanceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var licenseData
     */
    public $licenseData;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'endTime' => 'EndTime',
        'licenseData' => 'LicenseData',
        'reason' => 'Reason',
        'regionId' => 'RegionId',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
        if (null !== $this->licenseData) {
            $this->licenseData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->licenseData) {
            $res['LicenseData'] = null !== $this->licenseData ? $this->licenseData->toArray($noStream) : $this->licenseData;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LicenseData'])) {
            $model->licenseData = licenseData::fromMap($map['LicenseData']);
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
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
