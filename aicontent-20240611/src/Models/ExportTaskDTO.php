<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExportTaskDTO extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var int
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $maxRows;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createdAt' => 'createdAt',
        'error' => 'error',
        'filename' => 'filename',
        'finishedAt' => 'finishedAt',
        'id' => 'id',
        'maxRows' => 'maxRows',
        'progress' => 'progress',
        'status' => 'status',
        'total' => 'total',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->filename) {
            $res['filename'] = $this->filename;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->maxRows) {
            $res['maxRows'] = $this->maxRows;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['filename'])) {
            $model->filename = $map['filename'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['maxRows'])) {
            $model->maxRows = $map['maxRows'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
