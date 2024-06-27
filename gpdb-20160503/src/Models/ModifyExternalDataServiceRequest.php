<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyExternalDataServiceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-bp10g78o9807yv9h3
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The region ID.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the service.
     *
     * @example test-adbpgss
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The specifications of the service. Unit: compute units (CUs). Valid values:
     *
     *   8
     *
     * This parameter is required.
     * @example 2
     *
     * @var string
     */
    public $serviceSpec;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'regionId'           => 'RegionId',
        'serviceDescription' => 'ServiceDescription',
        'serviceId'          => 'ServiceId',
        'serviceSpec'        => 'ServiceSpec',
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
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyExternalDataServiceRequest
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
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }

        return $model;
    }
}
