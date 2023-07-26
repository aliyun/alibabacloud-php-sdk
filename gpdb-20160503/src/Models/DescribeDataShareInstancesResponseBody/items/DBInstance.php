<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataShareInstancesResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The resource type of the instance. Valid values:
     *
     *   **Serverless**: Serverless mode
     *   **StorageElasic**: elastic storage mode
     *   **Classic**: reserved storage mode
     *
     * @example Serverless
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @description The state of data sharing. Valid values:
     *
     *   **opening**: Data sharing is being enabled.
     *   **opened**: Data sharing is enabled.
     *   **closing**: Data sharing is being disabled.
     *   **closed**: Data sharing is disabled.
     *
     * @example opened
     *
     * @var string
     */
    public $dataShareStatus;

    /**
     * @description The description of the instance.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $description;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'DBInstanceMode'  => 'DBInstanceMode',
        'dataShareStatus' => 'DataShareStatus',
        'description'     => 'Description',
        'regionId'        => 'RegionId',
        'zoneId'          => 'ZoneId',
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
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->dataShareStatus) {
            $res['DataShareStatus'] = $this->dataShareStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['DataShareStatus'])) {
            $model->dataShareStatus = $map['DataShareStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
