<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressConnectTrafficQosResponseBody extends Model
{
    /**
     * @example qos-2giu0a6vd5x0mv4700
     *
     * @var string
     */
    public $qosId;

    /**
     * @example DC668356-BCB4-42FD-9BC3-FA2B2E04B634
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosId'     => 'QosId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExpressConnectTrafficQosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
