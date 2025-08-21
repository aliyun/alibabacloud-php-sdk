<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class EnableSqlConcurrencyControlRequest extends Model
{
    /**
     * @var int
     */
    public $concurrencyControlTime;

    /**
     * @var string
     */
    public $consoleContext;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $sqlKeywords;

    /**
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'concurrencyControlTime' => 'ConcurrencyControlTime',
        'consoleContext' => 'ConsoleContext',
        'instanceId' => 'InstanceId',
        'maxConcurrency' => 'MaxConcurrency',
        'sqlKeywords' => 'SqlKeywords',
        'sqlType' => 'SqlType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
