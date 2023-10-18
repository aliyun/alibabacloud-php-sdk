<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\errorInfoList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\physicalConnectionList;
use AlibabaCloud\Tea\Model;

class CreateHighReliablePhysicalConnectionResponseBody extends Model
{
    /**
     * @var errorInfoList
     */
    public $errorInfoList;

    /**
     * @var physicalConnectionList
     */
    public $physicalConnectionList;

    /**
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorInfoList'          => 'ErrorInfoList',
        'physicalConnectionList' => 'PhysicalConnectionList',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorInfoList) {
            $res['ErrorInfoList'] = null !== $this->errorInfoList ? $this->errorInfoList->toMap() : null;
        }
        if (null !== $this->physicalConnectionList) {
            $res['PhysicalConnectionList'] = null !== $this->physicalConnectionList ? $this->physicalConnectionList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHighReliablePhysicalConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorInfoList'])) {
            $model->errorInfoList = errorInfoList::fromMap($map['ErrorInfoList']);
        }
        if (isset($map['PhysicalConnectionList'])) {
            $model->physicalConnectionList = physicalConnectionList::fromMap($map['PhysicalConnectionList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
