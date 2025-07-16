<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteVirtualResourceResponseBody extends Model
{
    /**
     * @description The information about the operation result.
     *
     * @example Successfully deleted virtual resource eas-vr-npovr28onap1xxxxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 40325405-579C-4D82***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVirtualResourceResponseBody
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

        return $model;
    }
}
