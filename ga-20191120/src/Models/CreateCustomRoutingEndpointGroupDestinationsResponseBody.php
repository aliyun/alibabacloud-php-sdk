<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomRoutingEndpointGroupDestinationsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $destinationIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'destinationIds' => 'DestinationIds',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationIds) {
            $res['DestinationIds'] = $this->destinationIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomRoutingEndpointGroupDestinationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationIds'])) {
            if (!empty($map['DestinationIds'])) {
                $model->destinationIds = $map['DestinationIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
