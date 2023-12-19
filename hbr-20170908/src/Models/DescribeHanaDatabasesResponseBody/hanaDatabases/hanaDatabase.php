<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponseBody\hanaDatabases;

use AlibabaCloud\Tea\Model;

class hanaDatabase extends Model
{
    /**
     * @description Indicates whether the database is started. Valid values:
     *
     *   **YES**: The database is started.
     *   **NO**: The database is not started.
     *
     * @example YES
     *
     * @var string
     */
    public $activeStatus;

    /**
     * @description The name of the database.
     *
     * @example SYSTEMDB
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The detailed information.
     *
     * @example master
     *
     * @var string
     */
    public $detail;

    /**
     * @description The hostname.
     *
     * @example izbp1jbf3zy******antqmz
     *
     * @var string
     */
    public $host;

    /**
     * @description The name of the service.
     *
     * @example indexserver
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The port number.
     *
     * @example 30013
     *
     * @var int
     */
    public $sqlPort;
    protected $_name = [
        'activeStatus' => 'ActiveStatus',
        'databaseName' => 'DatabaseName',
        'detail'       => 'Detail',
        'host'         => 'Host',
        'serviceName'  => 'ServiceName',
        'sqlPort'      => 'SqlPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeStatus) {
            $res['ActiveStatus'] = $this->activeStatus;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->sqlPort) {
            $res['SqlPort'] = $this->sqlPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanaDatabase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveStatus'])) {
            $model->activeStatus = $map['ActiveStatus'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SqlPort'])) {
            $model->sqlPort = $map['SqlPort'];
        }

        return $model;
    }
}
