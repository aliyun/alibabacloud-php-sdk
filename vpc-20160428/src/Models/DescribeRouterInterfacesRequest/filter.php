<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter conditions. You can specify up to five filter conditions. The following filter conditions are supported:
     *
     *   **RouterInterfaceId**: the ID of the router interface.
     *   **RouterId**: the ID of the router.
     *   **RouterType**: the router type. Valid values: **VRouter** and **VBR**.
     *   **RouterInterfaceOwnerId**: the ID of the Alibaba Cloud account to which the router interface belongs.
     *   **OppositeInterfaceId**: the ID of the peer router interface.
     *   **OppositeRouterType**: the type of the peer router interface. Valid values: **VRouter** and **VBR**.
     *   **OppositeRouterId**: the ID of the peer router.
     *   **OppositeInterfaceOwnerId**: the ID of the Alibaba Cloud account to which the peer router interface belongs.
     *   **Status**: the status of the router interface.
     *   **Name**: the name of the router interface.
     *
     * >  The logical operator among multiple values in a filter condition is OR. In this case, the filter condition is met if one of the values is matched. The logical operator among filter conditions is AND. Only routers that meet all the filter conditions are queried.
     * @example Filter.1.Status
     *
     * @var string
     */
    public $key;

    /**
     * @description Specifies the value in the filter condition based on the key. You can specify multiple filter values for one key. The logical operator among filter values is OR. If one filter value is matched, the filter condition is matched.
     *
     * @example Filter.1.Active 1
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
