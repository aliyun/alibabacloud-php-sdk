<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenInterRegionTrafficQosQueueResponseBody extends Model
{
    /**
     * @description The ID of the queue.
     *
     * @example qos-queue-irqhi8k5fdyuu5****
     *
     * @var string
     */
    public $qosQueueId;

    /**
     * @description The ID of the request.
     *
     * @example 845F66F6-5C27-53A1-9428-B859086237B2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosQueueId' => 'QosQueueId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosQueueId) {
            $res['QosQueueId'] = $this->qosQueueId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenInterRegionTrafficQosQueueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosQueueId'])) {
            $model->qosQueueId = $map['QosQueueId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
