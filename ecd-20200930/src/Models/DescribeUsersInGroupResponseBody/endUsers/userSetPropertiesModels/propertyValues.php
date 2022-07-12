<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\userSetPropertiesModels;

use AlibabaCloud\Tea\Model;

class propertyValues extends Model
{
    /**
     * @var string
     */
    public $propertyValue;

    /**
     * @var int
     */
    public $propertyValueId;
    protected $_name = [
        'propertyValue'   => 'PropertyValue',
        'propertyValueId' => 'PropertyValueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
        }
        if (null !== $this->propertyValueId) {
            $res['PropertyValueId'] = $this->propertyValueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }
        if (isset($map['PropertyValueId'])) {
            $model->propertyValueId = $map['PropertyValueId'];
        }

        return $model;
    }
}
