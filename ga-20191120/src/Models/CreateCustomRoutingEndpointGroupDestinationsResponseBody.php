<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationIds)) {
            Model::validateArray($this->destinationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationIds) {
            if (\is_array($this->destinationIds)) {
                $res['DestinationIds'] = [];
                $n1 = 0;
                foreach ($this->destinationIds as $item1) {
                    $res['DestinationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DestinationIds'])) {
            if (!empty($map['DestinationIds'])) {
                $model->destinationIds = [];
                $n1 = 0;
                foreach ($map['DestinationIds'] as $item1) {
                    $model->destinationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
