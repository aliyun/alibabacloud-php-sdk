<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $queryID;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database'     => 'Database',
        'queryID'      => 'QueryID',
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
