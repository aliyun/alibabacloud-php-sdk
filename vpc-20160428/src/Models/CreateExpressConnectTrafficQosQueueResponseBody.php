<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreateExpressConnectTrafficQosQueueResponseBody extends Model
{
    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $queueId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosId' => 'QosId',
        'queueId' => 'QueueId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
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
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
