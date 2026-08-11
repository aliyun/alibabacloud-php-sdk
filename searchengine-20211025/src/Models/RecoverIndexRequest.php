<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class RecoverIndexRequest extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $buildDeployId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $generation;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $odpsAccessId;

    /**
     * @var string
     */
    public $odpsAccessKey;

    /**
     * @var string
     */
    public $odpsPartition;

    /**
     * @var string
     */
    public $odpsProject;

    /**
     * @var string
     */
    public $odpsTable;

    /**
     * @var string
     */
    public $outPutType;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'bucket' => 'bucket',
        'buildDeployId' => 'buildDeployId',
        'dataSourceName' => 'dataSourceName',
        'generation' => 'generation',
        'indexName' => 'indexName',
        'odpsAccessId' => 'odpsAccessId',
        'odpsAccessKey' => 'odpsAccessKey',
        'odpsPartition' => 'odpsPartition',
        'odpsProject' => 'odpsProject',
        'odpsTable' => 'odpsTable',
        'outPutType' => 'outPutType',
        'path' => 'path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }

        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        if (null !== $this->odpsAccessId) {
            $res['odpsAccessId'] = $this->odpsAccessId;
        }

        if (null !== $this->odpsAccessKey) {
            $res['odpsAccessKey'] = $this->odpsAccessKey;
        }

        if (null !== $this->odpsPartition) {
            $res['odpsPartition'] = $this->odpsPartition;
        }

        if (null !== $this->odpsProject) {
            $res['odpsProject'] = $this->odpsProject;
        }

        if (null !== $this->odpsTable) {
            $res['odpsTable'] = $this->odpsTable;
        }

        if (null !== $this->outPutType) {
            $res['outPutType'] = $this->outPutType;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }

        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        if (isset($map['odpsAccessId'])) {
            $model->odpsAccessId = $map['odpsAccessId'];
        }

        if (isset($map['odpsAccessKey'])) {
            $model->odpsAccessKey = $map['odpsAccessKey'];
        }

        if (isset($map['odpsPartition'])) {
            $model->odpsPartition = $map['odpsPartition'];
        }

        if (isset($map['odpsProject'])) {
            $model->odpsProject = $map['odpsProject'];
        }

        if (isset($map['odpsTable'])) {
            $model->odpsTable = $map['odpsTable'];
        }

        if (isset($map['outPutType'])) {
            $model->outPutType = $map['outPutType'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
