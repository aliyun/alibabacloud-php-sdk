<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType;
use AlibabaCloud\Tea\Model;

class DescribePhysicalConnectionLOAResponseBody extends Model
{
    /**
     * @description The LOA information about the Express Connect circuit.
     *
     * @var physicalConnectionLOAType
     */
    public $physicalConnectionLOAType;

    /**
     * @description The ID of the request.
     *
     * @example 318BB676-0A2B-43A0-9AD8-F1D34E93750F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'physicalConnectionLOAType' => 'PhysicalConnectionLOAType',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionLOAType) {
            $res['PhysicalConnectionLOAType'] = null !== $this->physicalConnectionLOAType ? $this->physicalConnectionLOAType->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhysicalConnectionLOAResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalConnectionLOAType'])) {
            $model->physicalConnectionLOAType = physicalConnectionLOAType::fromMap($map['PhysicalConnectionLOAType']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
