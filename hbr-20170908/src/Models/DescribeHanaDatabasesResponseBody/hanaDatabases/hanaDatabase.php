<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponseBody\hanaDatabases;

use AlibabaCloud\Dara\Model;

class hanaDatabase extends Model
{
    /**
     * @var string
     */
    public $activeStatus;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var string
     */
    public $detail;
    /**
     * @var string
     */
    public $host;
    /**
     * @var string
     */
    public $serviceName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
