<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshGatewayPodStatusResponseBody\ASMGatewayDetails;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshGatewayPodStatusResponseBody extends Model
{
    /**
     * @var ASMGatewayDetails[]
     */
    public $ASMGatewayDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ASMGatewayDetails' => 'ASMGatewayDetails',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASMGatewayDetails) {
            $res['ASMGatewayDetails'] = [];
            if (null !== $this->ASMGatewayDetails && \is_array($this->ASMGatewayDetails)) {
                $n = 0;
                foreach ($this->ASMGatewayDetails as $item) {
                    $res['ASMGatewayDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshGatewayPodStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASMGatewayDetails'])) {
            if (!empty($map['ASMGatewayDetails'])) {
                $model->ASMGatewayDetails = [];
                $n                        = 0;
                foreach ($map['ASMGatewayDetails'] as $item) {
                    $model->ASMGatewayDetails[$n++] = null !== $item ? ASMGatewayDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
