<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class UpdateEndpointGroupsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $endpointGroupIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endpointGroupIds' => 'EndpointGroupIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->endpointGroupIds)) {
            Model::validateArray($this->endpointGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointGroupIds) {
            if (\is_array($this->endpointGroupIds)) {
                $res['EndpointGroupIds'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupIds as $item1) {
                    $res['EndpointGroupIds'][$n1] = $item1;
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
        if (isset($map['EndpointGroupIds'])) {
            if (!empty($map['EndpointGroupIds'])) {
                $model->endpointGroupIds = [];
                $n1 = 0;
                foreach ($map['EndpointGroupIds'] as $item1) {
                    $model->endpointGroupIds[$n1] = $item1;
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
