<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceConnectionStringResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $connectionString;
    /**
     * @var int
     */
    public $DBInstanceID;
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var string
     */
    public $disabledPorts;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'DBInstanceID'     => 'DBInstanceID',
        'DBInstanceName'   => 'DBInstanceName',
        'disabledPorts'    => 'DisabledPorts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->disabledPorts) {
            $res['DisabledPorts'] = $this->disabledPorts;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DisabledPorts'])) {
            $model->disabledPorts = $map['DisabledPorts'];
        }

        return $model;
    }
}
