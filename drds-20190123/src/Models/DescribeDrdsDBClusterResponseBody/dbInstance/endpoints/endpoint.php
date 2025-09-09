<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints;

use AlibabaCloud\Dara\Model;

class endpoint extends Model
{
    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $nodeIds;

    /**
     * @var int
     */
    public $readWeight;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'nodeIds' => 'NodeIds',
        'readWeight' => 'ReadWeight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
