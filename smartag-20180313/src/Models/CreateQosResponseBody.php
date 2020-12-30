<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateQosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $qosId;
    protected $_name = [
        'requestId' => 'RequestId',
        'qosId'     => 'QosId',
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
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        return $model;
    }
}
