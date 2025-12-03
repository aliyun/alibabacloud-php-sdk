<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponseBody\result;

use AlibabaCloud\Dara\Model;

class annotations extends Model
{
    /**
     * @var string
     */
    public $annotationLevel;

    /**
     * @var int
     */
    public $endColumn;

    /**
     * @var int
     */
    public $endLine;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $rawDetails;

    /**
     * @var int
     */
    public $startColumn;

    /**
     * @var int
     */
    public $startLine;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'annotationLevel' => 'annotationLevel',
        'endColumn' => 'endColumn',
        'endLine' => 'endLine',
        'id' => 'id',
        'message' => 'message',
        'path' => 'path',
        'rawDetails' => 'rawDetails',
        'startColumn' => 'startColumn',
        'startLine' => 'startLine',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationLevel) {
            $res['annotationLevel'] = $this->annotationLevel;
        }

        if (null !== $this->endColumn) {
            $res['endColumn'] = $this->endColumn;
        }

        if (null !== $this->endLine) {
            $res['endLine'] = $this->endLine;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->rawDetails) {
            $res['rawDetails'] = $this->rawDetails;
        }

        if (null !== $this->startColumn) {
            $res['startColumn'] = $this->startColumn;
        }

        if (null !== $this->startLine) {
            $res['startLine'] = $this->startLine;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['annotationLevel'])) {
            $model->annotationLevel = $map['annotationLevel'];
        }

        if (isset($map['endColumn'])) {
            $model->endColumn = $map['endColumn'];
        }

        if (isset($map['endLine'])) {
            $model->endLine = $map['endLine'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['rawDetails'])) {
            $model->rawDetails = $map['rawDetails'];
        }

        if (isset($map['startColumn'])) {
            $model->startColumn = $map['startColumn'];
        }

        if (isset($map['startLine'])) {
            $model->startLine = $map['startLine'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
