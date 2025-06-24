<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetErrorRequestSampleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $originHost;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string[]
     */
    public $tables;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'database' => 'database',
        'errorCode' => 'errorCode',
        'instanceId' => 'instanceId',
        'originHost' => 'originHost',
        'sql' => 'sql',
        'sqlId' => 'sqlId',
        'tables' => 'tables',
        'timestamp' => 'timestamp',
        'user' => 'user',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->originHost) {
            $res['originHost'] = $this->originHost;
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        if (null !== $this->sqlId) {
            $res['sqlId'] = $this->sqlId;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['tables'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->user) {
            $res['user'] = $this->user;
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
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['originHost'])) {
            $model->originHost = $map['originHost'];
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        if (isset($map['sqlId'])) {
            $model->sqlId = $map['sqlId'];
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['tables'] as $item1) {
                    $model->tables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
