<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSlowSqlsResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description Indicates the IP address of the execution machine.
     *
     * @example 10.0.***.***
     *
     * @var string
     */
    public $host;

    /**
     * @description Indicates the response time. Unit: ms.
     *
     * @example 1568267711
     *
     * @var int
     */
    public $responseTime;

    /**
     * @description Indicates the name of the database.
     *
     * @example user
     *
     * @var string
     */
    public $schema;

    /**
     * @description Indicates the time when the slow SQL query was sent. Unit: ms.
     *
     * @example 1568267711
     *
     * @var int
     */
    public $sendTime;

    /**
     * @description Indicates the content of the slow SQL query.
     *
     * @example SELECT   count(1) from   payment_order where   order_status = \"08\";
     *
     * @var string
     */
    public $sql;
    protected $_name = [
        'host'         => 'Host',
        'responseTime' => 'ResponseTime',
        'schema'       => 'Schema',
        'sendTime'     => 'SendTime',
        'sql'          => 'Sql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->responseTime) {
            $res['ResponseTime'] = $this->responseTime;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['ResponseTime'])) {
            $model->responseTime = $map['ResponseTime'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}
