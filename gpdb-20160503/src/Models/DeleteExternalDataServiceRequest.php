<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteExternalDataServiceRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example gp-xxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Region ID.
     *
     * > You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) API to view available region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Service ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'regionId'     => 'RegionId',
        'serviceId'    => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExternalDataServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
