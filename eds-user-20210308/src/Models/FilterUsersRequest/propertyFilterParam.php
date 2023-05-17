<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;

use AlibabaCloud\Tea\Model;

class propertyFilterParam extends Model
{
    /**
     * @description The ID of the property.
     *
     * @example 123
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The IDs of the property values.
     *
     * @example test
     *
     * @var string
     */
    public $propertyValueIds;
    protected $_name = [
        'propertyId'       => 'PropertyId',
        'propertyValueIds' => 'PropertyValueIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->propertyValueIds) {
            $res['PropertyValueIds'] = $this->propertyValueIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyFilterParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['PropertyValueIds'])) {
            $model->propertyValueIds = $map['PropertyValueIds'];
        }

        return $model;
    }
}
