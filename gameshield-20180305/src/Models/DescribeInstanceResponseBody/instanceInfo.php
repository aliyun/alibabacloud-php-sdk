<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $packageCode;

    /**
     * @var string
     */
    public $region;

    /**
     * @var mixed[]
     */
    public $specMap;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'endTime'     => 'EndTime',
        'status'      => 'Status',
        'packageCode' => 'PackageCode',
        'region'      => 'Region',
        'specMap'     => 'SpecMap',
        'instanceId'  => 'InstanceId',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->packageCode) {
            $res['PackageCode'] = $this->packageCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->specMap) {
            $res['SpecMap'] = $this->specMap;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PackageCode'])) {
            $model->packageCode = $map['PackageCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SpecMap'])) {
            $model->specMap = $map['SpecMap'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
