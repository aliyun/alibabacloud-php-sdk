<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomRoutingEndpointsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $endpointIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endpointIds' => 'EndpointIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->endpointIds)) {
            Model::validateArray($this->endpointIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointIds) {
            if (\is_array($this->endpointIds)) {
                $res['EndpointIds'] = [];
                $n1 = 0;
                foreach ($this->endpointIds as $item1) {
                    $res['EndpointIds'][$n1] = $item1;
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
        if (isset($map['EndpointIds'])) {
            if (!empty($map['EndpointIds'])) {
                $model->endpointIds = [];
                $n1 = 0;
                foreach ($map['EndpointIds'] as $item1) {
                    $model->endpointIds[$n1] = $item1;
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
