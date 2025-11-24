<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\endPointSlice;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\serviceEndpoints;

class GetRegisteredServiceEndpointsResponseBody extends Model
{
    /**
     * @var endPointSlice
     */
    public $endPointSlice;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceEndpoints[]
     */
    public $serviceEndpoints;
    protected $_name = [
        'endPointSlice' => 'EndPointSlice',
        'requestId' => 'RequestId',
        'serviceEndpoints' => 'ServiceEndpoints',
    ];

    public function validate()
    {
        if (null !== $this->endPointSlice) {
            $this->endPointSlice->validate();
        }
        if (\is_array($this->serviceEndpoints)) {
            Model::validateArray($this->serviceEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endPointSlice) {
            $res['EndPointSlice'] = null !== $this->endPointSlice ? $this->endPointSlice->toArray($noStream) : $this->endPointSlice;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceEndpoints) {
            if (\is_array($this->serviceEndpoints)) {
                $res['ServiceEndpoints'] = [];
                $n1 = 0;
                foreach ($this->serviceEndpoints as $item1) {
                    $res['ServiceEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EndPointSlice'])) {
            $model->endPointSlice = endPointSlice::fromMap($map['EndPointSlice']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceEndpoints'])) {
            if (!empty($map['ServiceEndpoints'])) {
                $model->serviceEndpoints = [];
                $n1 = 0;
                foreach ($map['ServiceEndpoints'] as $item1) {
                    $model->serviceEndpoints[$n1] = serviceEndpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
