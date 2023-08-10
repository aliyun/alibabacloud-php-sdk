<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

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
        'analyzer'           => 'analyzer',
        'analyzerType'       => 'analyzerType',
        'analyzerGeneration' => 'analyzerGeneration',
        'fields'             => 'fields',
        'label'              => 'label',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['fields'] = $this->fields;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchemaIndexesSearchFieldsValue
     */
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
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        return $model;
    }
}
