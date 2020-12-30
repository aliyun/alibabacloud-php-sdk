<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType;
use AlibabaCloud\Tea\Model;

class DescribePhysicalConnectionLOAResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var physicalConnectionLOAType
     */
    public $physicalConnectionLOAType;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'physicalConnectionLOAType' => 'PhysicalConnectionLOAType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->physicalConnectionLOAType) {
            $res['PhysicalConnectionLOAType'] = null !== $this->physicalConnectionLOAType ? $this->physicalConnectionLOAType->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PhysicalConnectionLOAType'])) {
            $model->physicalConnectionLOAType = physicalConnectionLOAType::fromMap($map['PhysicalConnectionLOAType']);
        }

        return $model;
    }
}
