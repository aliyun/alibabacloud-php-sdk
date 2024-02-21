<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class EnableSqlConcurrencyControlRequest extends Model
{
    /**
     * @description The duration within which the SQL throttling rule takes effect. Unit: seconds.
     *
     * >  The throttling rule takes effect only within this duration.
     * @example 300
     *
     * @var int
     */
    public $concurrencyControlTime;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The instance ID.
     *
     * >  You must specify the instance ID only if your database instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum number of concurrent SQL statements. Set this parameter to a positive integer.
     *
     * >  When the number of concurrent SQL statements that contain the specified keywords reaches this upper limit, the throttling rule is triggered.
     * @example 3
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description The keywords that are used to identify the SQL statements that need to be throttled.
     *
     * >  If you specify multiple SQL keywords, separate them with tildes (~). If the number of concurrent SQL statements that contain all the specified SQL keywords reaches the specified upper limit, the throttling rule is triggered.
     * @example call~open~api~test~4~from~POP
     *
     * @var string
     */
    public $sqlKeywords;

    /**
     * @description The type of the SQL statements. Valid values:
     *
     *   **SELECT**
     *   **UPDATE**
     *   **DELETE**
     *
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'concurrencyControlTime' => 'ConcurrencyControlTime',
        'consoleContext'         => 'ConsoleContext',
        'instanceId'             => 'InstanceId',
        'maxConcurrency'         => 'MaxConcurrency',
        'sqlKeywords'            => 'SqlKeywords',
        'sqlType'                => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrencyControlTime) {
            $res['ConcurrencyControlTime'] = $this->concurrencyControlTime;
        }
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->sqlKeywords) {
            $res['SqlKeywords'] = $this->sqlKeywords;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableSqlConcurrencyControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrencyControlTime'])) {
            $model->concurrencyControlTime = $map['ConcurrencyControlTime'];
        }
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['SqlKeywords'])) {
            $model->sqlKeywords = $map['SqlKeywords'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
