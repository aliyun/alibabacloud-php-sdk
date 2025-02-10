<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\errorInfoList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\physicalConnectionList;

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
        if (null !== $this->errorInfoList) {
            $this->errorInfoList->validate();
        }
        if (null !== $this->physicalConnectionList) {
            $this->physicalConnectionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorInfoList) {
            $res['ErrorInfoList'] = null !== $this->errorInfoList ? $this->errorInfoList->toArray($noStream) : $this->errorInfoList;
        }

        if (null !== $this->physicalConnectionList) {
            $res['PhysicalConnectionList'] = null !== $this->physicalConnectionList ? $this->physicalConnectionList->toArray($noStream) : $this->physicalConnectionList;
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
