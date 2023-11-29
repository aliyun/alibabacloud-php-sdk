<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLSamplesRequest extends Model
{
    /**
     * @description The database name.
     *
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The end time of querying the slow query execution.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2023-04-12T05:38:38Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description SQL ID.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The start time of querying the slow query execution.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example 2023-04-12T04:38:38Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The tenant ID.
     *
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'dbName'     => 'DbName',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'sqlId'      => 'SqlId',
        'startTime'  => 'StartTime',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLSamplesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
