<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class CacheLoadTaskInfo extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var int
     */
    public $completedFiles;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $enumeratedFiles;

    /**
     * @var bool
     */
    public $enumerationDone;

    /**
     * @var string[]
     */
    public $extraOptions;

    /**
     * @var int
     */
    public $failedFiles;

    /**
     * @var string
     */
    public $lastError;

    /**
     * @var int
     */
    public $loadedBytes;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskUpdatedAt;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var int
     */
    public $totalFiles;
    protected $_name = [
        'catalogId' => 'catalogId',
        'completedFiles' => 'completedFiles',
        'database' => 'database',
        'enumeratedFiles' => 'enumeratedFiles',
        'enumerationDone' => 'enumerationDone',
        'extraOptions' => 'extraOptions',
        'failedFiles' => 'failedFiles',
        'lastError' => 'lastError',
        'loadedBytes' => 'loadedBytes',
        'path' => 'path',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'table' => 'table',
        'taskId' => 'taskId',
        'taskUpdatedAt' => 'taskUpdatedAt',
        'totalBytes' => 'totalBytes',
        'totalFiles' => 'totalFiles',
    ];

    public function validate()
    {
        if (\is_array($this->extraOptions)) {
            Model::validateArray($this->extraOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->completedFiles) {
            $res['completedFiles'] = $this->completedFiles;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->enumeratedFiles) {
            $res['enumeratedFiles'] = $this->enumeratedFiles;
        }

        if (null !== $this->enumerationDone) {
            $res['enumerationDone'] = $this->enumerationDone;
        }

        if (null !== $this->extraOptions) {
            if (\is_array($this->extraOptions)) {
                $res['extraOptions'] = [];
                foreach ($this->extraOptions as $key1 => $value1) {
                    $res['extraOptions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->failedFiles) {
            $res['failedFiles'] = $this->failedFiles;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = $this->lastError;
        }

        if (null !== $this->loadedBytes) {
            $res['loadedBytes'] = $this->loadedBytes;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskUpdatedAt) {
            $res['taskUpdatedAt'] = $this->taskUpdatedAt;
        }

        if (null !== $this->totalBytes) {
            $res['totalBytes'] = $this->totalBytes;
        }

        if (null !== $this->totalFiles) {
            $res['totalFiles'] = $this->totalFiles;
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
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['completedFiles'])) {
            $model->completedFiles = $map['completedFiles'];
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['enumeratedFiles'])) {
            $model->enumeratedFiles = $map['enumeratedFiles'];
        }

        if (isset($map['enumerationDone'])) {
            $model->enumerationDone = $map['enumerationDone'];
        }

        if (isset($map['extraOptions'])) {
            if (!empty($map['extraOptions'])) {
                $model->extraOptions = [];
                foreach ($map['extraOptions'] as $key1 => $value1) {
                    $model->extraOptions[$key1] = $value1;
                }
            }
        }

        if (isset($map['failedFiles'])) {
            $model->failedFiles = $map['failedFiles'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = $map['lastError'];
        }

        if (isset($map['loadedBytes'])) {
            $model->loadedBytes = $map['loadedBytes'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskUpdatedAt'])) {
            $model->taskUpdatedAt = $map['taskUpdatedAt'];
        }

        if (isset($map['totalBytes'])) {
            $model->totalBytes = $map['totalBytes'];
        }

        if (isset($map['totalFiles'])) {
            $model->totalFiles = $map['totalFiles'];
        }

        return $model;
    }
}
