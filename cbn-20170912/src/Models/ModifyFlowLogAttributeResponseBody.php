<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowLogAttributeResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 9A411874-2EC8-4633-9D30-9012DCE89DD1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowLogAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
