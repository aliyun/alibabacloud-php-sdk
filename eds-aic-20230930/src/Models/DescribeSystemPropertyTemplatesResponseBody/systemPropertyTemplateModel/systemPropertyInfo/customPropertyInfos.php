<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSystemPropertyTemplatesResponseBody\systemPropertyTemplateModel\systemPropertyInfo;

use AlibabaCloud\Tea\Model;

class customPropertyInfos extends Model
{
    /**
     * @example propKey
     *
     * @var string
     */
    public $propertyName;

    /**
     * @example propValue
     *
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'propertyName' => 'PropertyName',
        'propertyValue' => 'PropertyValue',
    ];

    public function validate() {}

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
     * @return customPropertyInfos
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
