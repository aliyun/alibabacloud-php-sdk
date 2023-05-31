<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyTypeItems extends Model
{
    /**
     * @description The name of the middleware type.
     *
     * @example Docker Component
     *
     * @var string
     */
    public $name;

    /**
     * @description The middleware type. Valid values:
     *
     *   **system_service**: system service
     *   **software_library**: software library
     *   **docker_component**: container component
     *   **database**: database
     *   **web_container**: web container
     *   **jar**: JAR package
     *   **web_framework**: web framework
     *
     * @example docker_component
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyTypeItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
