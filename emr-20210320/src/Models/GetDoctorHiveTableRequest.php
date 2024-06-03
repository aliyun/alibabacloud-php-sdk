<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class GetDoctorHiveTableRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specify the date in the ISO 8601 standard. For example, 2023-01-01 represents January 1, 2023.
     *
     * This parameter is required.
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

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
     * @description The table name. The table name must follow the rule in Hive. A name in the {database name.table identifier} format uniquely identifies a table.
     *
     * This parameter is required.
     * @example dw.dwd_creta_service_order_long_renew_long_da
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dateTime'  => 'DateTime',
        'regionId'  => 'RegionId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDoctorHiveTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
