<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $activationState;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $licenseType;
    protected $_name = [
        'requestId'       => 'RequestId',
        'DBInstanceId'    => 'DBInstanceId',
        'activationState' => 'ActivationState',
        'regionId'        => 'RegionId',
        'licenseType'     => 'LicenseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->activationState) {
            $res['ActivationState'] = $this->activationState;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ActivationState'])) {
            $model->activationState = $map['ActivationState'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        return $model;
    }
}
