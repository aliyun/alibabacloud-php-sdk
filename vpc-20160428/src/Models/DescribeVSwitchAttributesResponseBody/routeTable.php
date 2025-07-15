<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class routeTable extends Model
{
    /**
     * @description The ID of the route table that is associated with the vSwitch.
     *
     * @example vtb-bp145q7glnuzdv****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The type of the route table. Valid values:
     *
     *   **System**
     *   **Custom**
     *
     * @example System
     *
     * @var string
     */
    public $routeTableType;
    protected $_name = [
        'routeTableId' => 'RouteTableId',
        'routeTableType' => 'RouteTableType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }

        return $model;
    }
}
