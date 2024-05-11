<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeIMVInfosRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example testdb
     *
     * @var string
     */
    public $database;

    /**
     * @example public."mv1"
     *
     * @var string
     */
    public $MVName;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database'     => 'Database',
        'MVName'       => 'MVName',
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
        if (null !== $this->MVName) {
            $res['MVName'] = $this->MVName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIMVInfosRequest
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
        if (isset($map['MVName'])) {
            $model->MVName = $map['MVName'];
        }

        return $model;
    }
}
