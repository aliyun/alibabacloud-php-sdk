<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsResponseBody\data;

use AlibabaCloud\Dara\Model;

class documents extends Model
{
    /**
     * @var int
     */
    public $chunkCount;

    /**
     * @var string
     */
    public $chunkMethod;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $run;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var int
     */
    public $tokenCount;
    protected $_name = [
        'chunkCount' => 'chunkCount',
        'chunkMethod' => 'chunkMethod',
        'datasetId' => 'datasetId',
        'id' => 'id',
        'location' => 'location',
        'name' => 'name',
        'progress' => 'progress',
        'run' => 'run',
        'size' => 'size',
        'suffix' => 'suffix',
        'thumbnail' => 'thumbnail',
        'tokenCount' => 'tokenCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkCount) {
            $res['chunkCount'] = $this->chunkCount;
        }

        if (null !== $this->chunkMethod) {
            $res['chunkMethod'] = $this->chunkMethod;
        }

        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->run) {
            $res['run'] = $this->run;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }

        if (null !== $this->thumbnail) {
            $res['thumbnail'] = $this->thumbnail;
        }

        if (null !== $this->tokenCount) {
            $res['tokenCount'] = $this->tokenCount;
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
        if (isset($map['chunkCount'])) {
            $model->chunkCount = $map['chunkCount'];
        }

        if (isset($map['chunkMethod'])) {
            $model->chunkMethod = $map['chunkMethod'];
        }

        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['run'])) {
            $model->run = $map['run'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }

        if (isset($map['thumbnail'])) {
            $model->thumbnail = $map['thumbnail'];
        }

        if (isset($map['tokenCount'])) {
            $model->tokenCount = $map['tokenCount'];
        }

        return $model;
    }
}
