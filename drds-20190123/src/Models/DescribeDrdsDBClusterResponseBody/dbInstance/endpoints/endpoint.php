<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints;

use AlibabaCloud\Tea\Model;

class endpoint extends Model
{
    /**
     * @var int
     */
    public $readWeight;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $nodeIds;
    protected $_name = [
        'readWeight' => 'ReadWeight',
        'endpointId' => 'EndpointId',
        'nodeIds'    => 'NodeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readWeight) {
            $res['ReadWeight'] = $this->readWeight;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
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
        if (isset($map['ReadWeight'])) {
            $model->readWeight = $map['ReadWeight'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        return $model;
    }
}
