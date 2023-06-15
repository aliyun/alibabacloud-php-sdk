<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDetailResponseBody extends Model
{
    /**
     * @description Indicates whether the instance is in the active state.
     *
     * @example Invalid
     *
     * @var string
     */
    public $activationState;

    /**
     * @description The ID of the instance.
     *
     * @example rm-bp6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of the license.
     *
     * @example Normal
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 06B220E2-EAC5-4DBE-A1FC-1B62DB6A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'activationState' => 'ActivationState',
        'DBInstanceId'    => 'DBInstanceId',
        'licenseType'     => 'LicenseType',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationState) {
            $res['ActivationState'] = $this->activationState;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivationState'])) {
            $model->activationState = $map['ActivationState'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
