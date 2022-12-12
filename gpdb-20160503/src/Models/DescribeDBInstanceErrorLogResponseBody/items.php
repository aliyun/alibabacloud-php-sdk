<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceErrorLogResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @example null
     *
     * @var string
     */
    public $host;

    /**
     * @example unsupported frontend protocol 2689.28208: server supports 1.0 to 3.0
     *
     * @var string
     */
    public $logContext;

    /**
     * @example FATAL
     *
     * @var string
     */
    public $logLevel;

    /**
     * @example 2022-04-24 11:28:14
     *
     * @var int
     */
    public $time;

    /**
     * @example adbpguser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'database'   => 'Database',
        'host'       => 'Host',
        'logContext' => 'LogContext',
        'logLevel'   => 'LogLevel',
        'time'       => 'Time',
        'user'       => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->logContext) {
            $res['LogContext'] = $this->logContext;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['LogContext'])) {
            $model->logContext = $map['LogContext'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
