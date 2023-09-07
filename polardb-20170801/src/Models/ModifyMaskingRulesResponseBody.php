<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyMaskingRulesResponseBody extends Model
{
    /**
     * @description The message that is returned for the request.
     *
     * > If the request is successful, Successful is returned. If the request fails, an error message such as an error code is returned.
     * @example Message
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 99B355CE-526C-478B-B730-AD9D7C******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid value:
     *
     *   **true**:
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
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
     * @return ModifyMaskingRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
