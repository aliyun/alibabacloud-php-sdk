<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDatabaseRequest extends Model
{
    /**
     * @description The error code.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description The name of the catalog to which the database belongs.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The details of the database.
     *
     * @example mysql
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The operation that you want to perform. Set the value to **GetDatabase**.
     *
     * @example test_sid
     *
     * @var string
     */
    public $sid;

    /**
     * @description The ID of the database.
     *
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'host'       => 'Host',
        'port'       => 'Port',
        'schemaName' => 'SchemaName',
        'sid'        => 'Sid',
        'tid'        => 'Tid',
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
