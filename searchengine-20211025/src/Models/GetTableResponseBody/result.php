<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\dataProcessConfig;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\dataSource;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\vectorIndex;

class result extends Model
{
    /**
     * @var dataProcessConfig[]
     */
    public $dataProcessConfig;

    /**
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
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $partitionCount;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $rawSchema;

    /**
     * @var string
     */
    public $status;

    /**
     * @var vectorIndex[]
     */
    public $vectorIndex;
    protected $_name = [
        'dataProcessConfig' => 'dataProcessConfig',
        'dataProcessorCount' => 'dataProcessorCount',
        'dataSource' => 'dataSource',
        'fieldSchema' => 'fieldSchema',
        'name' => 'name',
        'partitionCount' => 'partitionCount',
        'primaryKey' => 'primaryKey',
        'rawSchema' => 'rawSchema',
        'status' => 'status',
        'vectorIndex' => 'vectorIndex',
    ];

    public function validate()
    {
        if (\is_array($this->dataProcessConfig)) {
            Model::validateArray($this->dataProcessConfig);
        }
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (\is_array($this->fieldSchema)) {
            Model::validateArray($this->fieldSchema);
        }
        if (\is_array($this->vectorIndex)) {
            Model::validateArray($this->vectorIndex);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataProcessConfig) {
            if (\is_array($this->dataProcessConfig)) {
                $res['dataProcessConfig'] = [];
                $n1 = 0;
                foreach ($this->dataProcessConfig as $item1) {
                    $res['dataProcessConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataProcessorCount) {
            $res['dataProcessorCount'] = $this->dataProcessorCount;
        }

        if (null !== $this->dataSource) {
            $res['dataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->fieldSchema) {
            if (\is_array($this->fieldSchema)) {
                $res['fieldSchema'] = [];
                foreach ($this->fieldSchema as $key1 => $value1) {
                    $res['fieldSchema'][$key1] = $value1;
                }
            }
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

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->vectorIndex) {
            if (\is_array($this->vectorIndex)) {
                $res['vectorIndex'] = [];
                $n1 = 0;
                foreach ($this->vectorIndex as $item1) {
                    $res['vectorIndex'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['dataProcessConfig'])) {
            if (!empty($map['dataProcessConfig'])) {
                $model->dataProcessConfig = [];
                $n1 = 0;
                foreach ($map['dataProcessConfig'] as $item1) {
                    $model->dataProcessConfig[$n1] = dataProcessConfig::fromMap($item1);
                    ++$n1;
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
            if (!empty($map['fieldSchema'])) {
                $model->fieldSchema = [];
                foreach ($map['fieldSchema'] as $key1 => $value1) {
                    $model->fieldSchema[$key1] = $value1;
                }
            }
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

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['vectorIndex'])) {
            if (!empty($map['vectorIndex'])) {
                $model->vectorIndex = [];
                $n1 = 0;
                foreach ($map['vectorIndex'] as $item1) {
                    $model->vectorIndex[$n1] = vectorIndex::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
