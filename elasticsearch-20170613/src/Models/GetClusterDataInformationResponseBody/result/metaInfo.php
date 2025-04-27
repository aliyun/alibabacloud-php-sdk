<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponseBody\result;

use AlibabaCloud\Dara\Model;

class metaInfo extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    /**
     * @var string[]
     */
    public $indices;

    /**
     * @var string
     */
    public $mapping;

    /**
     * @var string
     */
    public $settings;

    /**
     * @var string[]
     */
    public $typeName;
    protected $_name = [
        'fields' => 'fields',
        'indices' => 'indices',
        'mapping' => 'mapping',
        'settings' => 'settings',
        'typeName' => 'typeName',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->indices)) {
            Model::validateArray($this->indices);
        }
        if (\is_array($this->typeName)) {
            Model::validateArray($this->typeName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['indices'] = [];
                $n1 = 0;
                foreach ($this->indices as $item1) {
                    $res['indices'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mapping) {
            $res['mapping'] = $this->mapping;
        }

        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }

        if (null !== $this->typeName) {
            if (\is_array($this->typeName)) {
                $res['typeName'] = [];
                $n1 = 0;
                foreach ($this->typeName as $item1) {
                    $res['typeName'][$n1++] = $item1;
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
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1++] = $item1;
                }
            }
        }

        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = [];
                $n1 = 0;
                foreach ($map['indices'] as $item1) {
                    $model->indices[$n1++] = $item1;
                }
            }
        }

        if (isset($map['mapping'])) {
            $model->mapping = $map['mapping'];
        }

        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }

        if (isset($map['typeName'])) {
            if (!empty($map['typeName'])) {
                $model->typeName = [];
                $n1 = 0;
                foreach ($map['typeName'] as $item1) {
                    $model->typeName[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
