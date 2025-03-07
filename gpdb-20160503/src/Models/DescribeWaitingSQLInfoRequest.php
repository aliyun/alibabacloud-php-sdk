<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeWaitingSQLInfoRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $database;

    /**
     * @description The ID of the process that uniquely identifies the query.
     *
     * This parameter is required.
     * @example 100
     *
     * @var string
     */
    public $PID;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database'     => 'Database',
        'PID'          => 'PID',
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
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->PID) {
            $res['PID'] = $this->PID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWaitingSQLInfoRequest
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
        if (isset($map['PID'])) {
            $model->PID = $map['PID'];
        }

        return $model;
    }
}
