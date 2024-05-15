<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class EnableSqlConcurrencyControlRequest extends Model
{
    /**
     * @description The duration within which the SQL throttling rule takes effect. Unit: seconds.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum number of concurrent SQL statements. Set this parameter to a positive integer.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description The keywords that are used to identify the SQL statements that need to be throttled.
     *
     * This parameter is required.
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
     * This parameter is required.
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
