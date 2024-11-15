<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponseBody\resources;

use AlibabaCloud\Tea\Model;

class resourceProperties extends Model
{
    /**
     * @description The name of the resource attribute.
     *
     * @example DisplayName
     *
     * @var string
     */
    public $propertyName;

    /**
     * @description The value of the resource attribute.
     *
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'propertyName'  => 'PropertyName',
        'propertyValue' => 'PropertyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }

        return $model;
    }
}
