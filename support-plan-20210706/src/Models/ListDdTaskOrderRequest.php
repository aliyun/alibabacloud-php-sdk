<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class ListDdTaskOrderRequest extends Model
{
    /**
     * @description callerParentId
     *
     * @var int
     */
    public $callerParentId;

    /**
     * @description callerType
     *
     * @var string
     */
    public $callerType;

    /**
     * @description callerUid
     *
     * @var int
     */
    public $callerUid;

    /**
     * @description openGroupId
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description orderId
     *
     * @var string
     */
    public $orderId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description taskStatus
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'callerParentId' => 'CallerParentId',
        'callerType'     => 'CallerType',
        'callerUid'      => 'CallerUid',
        'openGroupId'    => 'OpenGroupId',
        'orderId'        => 'OrderId',
        'requestId'      => 'RequestId',
        'taskStatus'     => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDdTaskOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
