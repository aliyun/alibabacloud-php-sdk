<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceErrorLogResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $database;
    /**
     * @var string
     */
    public $host;
    /**
     * @var string
     */
    public $logContext;
    /**
     * @var string
     */
    public $logLevel;
    /**
     * @var int
     */
    public $time;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
