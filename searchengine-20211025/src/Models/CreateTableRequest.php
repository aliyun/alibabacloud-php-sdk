<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataProcessConfig;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataSource;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\vectorIndex;
use AlibabaCloud\Tea\Model;

class CreateTableRequest extends Model
{
    /**
     * @var dataProcessConfig[]
     */
    public $dataProcessConfig;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataProcessorCount;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var string[]
     */
    public $fieldSchema;

    /**
     * @example index_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $partitionCount;

    /**
     * @example id
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @example {}
     *
     * @var string
     */
    public $rawSchema;

    /**
     * @var vectorIndex[]
     */
    public $vectorIndex;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'dataProcessConfig'  => 'dataProcessConfig',
        'dataProcessorCount' => 'dataProcessorCount',
        'dataSource'         => 'dataSource',
        'fieldSchema'        => 'fieldSchema',
        'name'               => 'name',
        'partitionCount'     => 'partitionCount',
        'primaryKey'         => 'primaryKey',
        'rawSchema'          => 'rawSchema',
        'vectorIndex'        => 'vectorIndex',
        'dryRun'             => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataProcessConfig) {
            $res['dataProcessConfig'] = [];
            if (null !== $this->dataProcessConfig && \is_array($this->dataProcessConfig)) {
                $n = 0;
                foreach ($this->dataProcessConfig as $item) {
                    $res['dataProcessConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataProcessorCount) {
            $res['dataProcessorCount'] = $this->dataProcessorCount;
        }
        if (null !== $this->dataSource) {
            $res['dataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->fieldSchema) {
            $res['fieldSchema'] = $this->fieldSchema;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->partitionCount) {
            $res['partitionCount'] = $this->partitionCount;
        }
        if (null !== $this->primaryKey) {
            $res['primaryKey'] = $this->primaryKey;
        }
        if (null !== $this->rawSchema) {
            $res['rawSchema'] = $this->rawSchema;
        }
        if (null !== $this->vectorIndex) {
            $res['vectorIndex'] = [];
            if (null !== $this->vectorIndex && \is_array($this->vectorIndex)) {
                $n = 0;
                foreach ($this->vectorIndex as $item) {
                    $res['vectorIndex'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataProcessConfig'])) {
            if (!empty($map['dataProcessConfig'])) {
                $model->dataProcessConfig = [];
                $n                        = 0;
                foreach ($map['dataProcessConfig'] as $item) {
                    $model->dataProcessConfig[$n++] = null !== $item ? dataProcessConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dataProcessorCount'])) {
            $model->dataProcessorCount = $map['dataProcessorCount'];
        }
        if (isset($map['dataSource'])) {
            $model->dataSource = dataSource::fromMap($map['dataSource']);
        }
        if (isset($map['fieldSchema'])) {
            $model->fieldSchema = $map['fieldSchema'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['partitionCount'])) {
            $model->partitionCount = $map['partitionCount'];
        }
        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }
        if (isset($map['rawSchema'])) {
            $model->rawSchema = $map['rawSchema'];
        }
        if (isset($map['vectorIndex'])) {
            if (!empty($map['vectorIndex'])) {
                $model->vectorIndex = [];
                $n                  = 0;
                foreach ($map['vectorIndex'] as $item) {
                    $model->vectorIndex[$n++] = null !== $item ? vectorIndex::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
