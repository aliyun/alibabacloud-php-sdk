<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupsRequest\endpointGroupConfigurations;

use AlibabaCloud\Tea\Model;

class systemTag extends Model
{
    /**
     * @description The key of the system tag.
     *
     * You can enter up to 20 system tags.
     * @example system-tag-key
     *
     * @var string
     */
    public $key;

    /**
     * @description The visibility of the system tag. Valid values:
     *
     *   **public** (default): The system tag is visible and can be used for filtering.
     *   **private**: The system tag is invisible.
     *
     * @example public
     *
     * @var string
     */
    public $scope;

    /**
     * @description The value of the system tag.
     *
     * You can enter up to 20 system tags.
     * @example system-tag-value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'scope' => 'Scope',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
