<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyItems extends Model
{
    /**
     * @description The type of the middleware, database, or web service. Valid values:
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
    public $bizType;

    /**
     * @description The number of servers on which the middleware is run.
     *
     * @example 23
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the middleware.
     *
     * @example kubelet
     *
     * @var string
     */
    public $name;

    /**
     * @description The display name of the middleware type.
     *
     * @example Docker Component
     *
     * @var string
     */
    public $typeDisplay;
    protected $_name = [
        'bizType'     => 'BizType',
        'count'       => 'Count',
        'name'        => 'Name',
        'typeDisplay' => 'TypeDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->typeDisplay) {
            $res['TypeDisplay'] = $this->typeDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TypeDisplay'])) {
            $model->typeDisplay = $map['TypeDisplay'];
        }

        return $model;
    }
}
