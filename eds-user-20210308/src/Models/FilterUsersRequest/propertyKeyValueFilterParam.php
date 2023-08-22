<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;

use AlibabaCloud\Tea\Model;

class propertyKeyValueFilterParam extends Model
{
    /**
     * @description The property name.
     *
     * @example job
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description The property values.
     *
     * @example dev
     *
     * @var string
     */
    public $propertyValues;
    protected $_name = [
        'propertyKey'    => 'PropertyKey',
        'propertyValues' => 'PropertyValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyValues) {
            $res['PropertyValues'] = $this->propertyValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyKeyValueFilterParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['PropertyValues'])) {
            $model->propertyValues = $map['PropertyValues'];
        }

        return $model;
    }
}
