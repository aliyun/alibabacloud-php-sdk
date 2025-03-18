<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * > You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query details about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     *
     * This parameter is required.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     *
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @description The query ID. It is a unique identifier of the query.
     *
     * > You can call the [DescribeDiagnosisRecords](https://help.aliyun.com/document_detail/450511.html) operation to obtain query IDs.
     *
     * This parameter is required.
     *
     * @example 71403480878****
     *
     * @var string
     */
    public $queryID;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database' => 'Database',
        'queryID' => 'QueryID',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->queryID) {
            $res['QueryID'] = $this->queryID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['QueryID'])) {
            $model->queryID = $map['QueryID'];
        }

        return $model;
    }
}
