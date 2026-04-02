<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var IndexKey[]
     */
    public $schema;
    protected $_name = [
        'datasetName' => 'datasetName',
        'description' => 'description',
        'schema' => 'schema',
    ];

    public function validate()
    {
        if (\is_array($this->schema)) {
            Model::validateArray($this->schema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['datasetName'] = $this->datasetName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['schema'] = [];
                foreach ($this->schema as $key1 => $value1) {
                    $res['schema'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['datasetName'])) {
            $model->datasetName = $map['datasetName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['schema'])) {
            if (!empty($map['schema'])) {
                $model->schema = [];
                foreach ($map['schema'] as $key1 => $value1) {
                    $model->schema[$key1] = IndexKey::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
