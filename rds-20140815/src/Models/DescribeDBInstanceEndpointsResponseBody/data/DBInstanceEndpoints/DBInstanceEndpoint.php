<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\addressItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\nodeItems;
use AlibabaCloud\Tea\Model;

class DBInstanceEndpoint extends Model
{
    /**
     * @description The information about the endpoint.
     *
     * @var addressItems
     */
    public $addressItems;

    /**
     * @description The user-defined description of the endpoint.
     *
     * @example for readonly business
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @description The endpoint ID of the instance.
     *
     * @example ep-****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Primary**: the read/write endpoint of the instance
     *   **Readonly**: the read-only endpoint of the instance
     *
     * @example Readonly
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The information about the node that is configured for the endpoint.
     *
     * @var nodeItems
     */
    public $nodeItems;
    protected $_name = [
        'addressItems'        => 'AddressItems',
        'endpointDescription' => 'EndpointDescription',
        'endpointId'          => 'EndpointId',
        'endpointType'        => 'EndpointType',
        'nodeItems'           => 'NodeItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressItems) {
            $res['AddressItems'] = null !== $this->addressItems ? $this->addressItems->toMap() : null;
        }
        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->nodeItems) {
            $res['NodeItems'] = null !== $this->nodeItems ? $this->nodeItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItems'])) {
            $model->addressItems = addressItems::fromMap($map['AddressItems']);
        }
        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['NodeItems'])) {
            $model->nodeItems = nodeItems::fromMap($map['NodeItems']);
        }

        return $model;
    }
}
