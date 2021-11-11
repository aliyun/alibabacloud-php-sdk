<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponseBody\result;

use AlibabaCloud\Tea\Model;

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
        'fields'   => 'fields',
        'indices'  => 'indices',
        'mapping'  => 'mapping',
        'settings' => 'settings',
        'typeName' => 'typeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->indices) {
            $res['indices'] = $this->indices;
        }
        if (null !== $this->mapping) {
            $res['mapping'] = $this->mapping;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->typeName) {
            $res['typeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = $map['indices'];
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
                $model->typeName = $map['typeName'];
            }
        }

        return $model;
    }
}
