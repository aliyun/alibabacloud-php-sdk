<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody\schemas\attributes;
use AlibabaCloud\Tea\Model;

class schemas extends Model
{
    /**
     * @description The properties of the configuration list.
     *
     * @var attributes[]
     */
    public $attributes;

    /**
     * @description The name of the configuration list.
     *
     * @example ACS:Application
     *
     * @var string
     */
    public $typeName;

    /**
     * @description The version of the configuration list.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'attributes' => 'Attributes',
        'typeName'   => 'TypeName',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = [];
            if (null !== $this->attributes && \is_array($this->attributes)) {
                $n = 0;
                foreach ($this->attributes as $item) {
                    $res['Attributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n                 = 0;
                foreach ($map['Attributes'] as $item) {
                    $model->attributes[$n++] = null !== $item ? attributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
