<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints;

use AlibabaCloud\Tea\Model;

class endpoint extends Model
{
    /**
     * @description The ID of the PolarDB connection address.
     *
     * @example pe-*****************
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID list of the nodes in the PolarDB connection string. Separate multiple nodes with commas (,).
     *
     * @example pi-*****************,pi-*****************
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @description The read ratio of this connection address managed by the DRDS database.
     *
     * @example 85
     *
     * @var int
     */
    public $readWeight;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'nodeIds'    => 'NodeIds',
        'readWeight' => 'ReadWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->readWeight) {
            $res['ReadWeight'] = $this->readWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }
        if (isset($map['ReadWeight'])) {
            $model->readWeight = $map['ReadWeight'];
        }

        return $model;
    }
}
