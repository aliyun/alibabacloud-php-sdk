<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetInventorySchemaResponseBody\schemas;

use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @description The data type of the property.
     *
     * @example STRING
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The name of the property.
     *
     * @example ApplicationType
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'dataType' => 'DataType',
        'name'     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
