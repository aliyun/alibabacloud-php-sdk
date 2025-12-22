<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class SchemaIndexesSearchFieldsValue extends Model
{
    /**
     * @var string
     */
    public $analyzer;

    /**
     * @var string
     */
    public $analyzerType;

    /**
     * @var string
     */
    public $analyzerGeneration;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'analyzer' => 'analyzer',
        'analyzerType' => 'analyzerType',
        'analyzerGeneration' => 'analyzerGeneration',
        'fields' => 'fields',
        'label' => 'label',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analyzer) {
            $res['analyzer'] = $this->analyzer;
        }

        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }

        if (null !== $this->analyzerGeneration) {
            $res['analyzerGeneration'] = $this->analyzerGeneration;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
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
        if (isset($map['analyzer'])) {
            $model->analyzer = $map['analyzer'];
        }

        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }

        if (isset($map['analyzerGeneration'])) {
            $model->analyzerGeneration = $map['analyzerGeneration'];
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        return $model;
    }
}
