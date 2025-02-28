<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\addressItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\nodeItems;

class DBInstanceEndpoint extends Model
{
    /**
     * @var addressItems
     */
    public $addressItems;
    /**
     * @var string
     */
    public $endpointDescription;
    /**
     * @var string
     */
    public $endpointId;
    /**
     * @var string
     */
    public $endpointType;
    /**
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
        if (null !== $this->addressItems) {
            $this->addressItems->validate();
        }
        if (null !== $this->nodeItems) {
            $this->nodeItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressItems) {
            $res['AddressItems'] = null !== $this->addressItems ? $this->addressItems->toArray($noStream) : $this->addressItems;
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
            $res['NodeItems'] = null !== $this->nodeItems ? $this->nodeItems->toArray($noStream) : $this->nodeItems;
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
