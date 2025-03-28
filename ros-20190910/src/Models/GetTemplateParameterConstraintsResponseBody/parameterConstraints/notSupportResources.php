<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints;

use AlibabaCloud\Dara\Model;

class notSupportResources extends Model
{
    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'propertyName' => 'PropertyName',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
