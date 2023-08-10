<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class DataSourcePluginsValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $fromFields;

    /**
     * @var string[]
     */
    public $parameters;
    protected $_name = [
        'name'       => 'name',
        'fromFields' => 'fromFields',
        'parameters' => 'parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->fromFields) {
            $res['fromFields'] = $this->fromFields;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSourcePluginsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['fromFields'])) {
            $model->fromFields = $map['fromFields'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }

        return $model;
    }
}
