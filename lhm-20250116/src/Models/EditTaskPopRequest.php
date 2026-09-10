<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class EditTaskPopRequest extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $dqlTestDatasourceName;

    /**
     * @var string
     */
    public $sourceDialect;

    /**
     * @var string
     */
    public $targetDialect;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'concurrency' => 'concurrency',
        'dqlTestDatasourceName' => 'dqlTestDatasourceName',
        'sourceDialect' => 'sourceDialect',
        'targetDialect' => 'targetDialect',
        'taskId' => 'taskId',
        'taskName' => 'taskName',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }

        if (null !== $this->dqlTestDatasourceName) {
            $res['dqlTestDatasourceName'] = $this->dqlTestDatasourceName;
        }

        if (null !== $this->sourceDialect) {
            $res['sourceDialect'] = $this->sourceDialect;
        }

        if (null !== $this->targetDialect) {
            $res['targetDialect'] = $this->targetDialect;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }

        if (isset($map['dqlTestDatasourceName'])) {
            $model->dqlTestDatasourceName = $map['dqlTestDatasourceName'];
        }

        if (isset($map['sourceDialect'])) {
            $model->sourceDialect = $map['sourceDialect'];
        }

        if (isset($map['targetDialect'])) {
            $model->targetDialect = $map['targetDialect'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
