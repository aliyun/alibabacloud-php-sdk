<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualResourceResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     * @example Successfully created virtual resource eas-vr-npovr28onap1xxxxxx
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

    /**
     * @description The ID of the virtual resource group.
     *
     * @example eas-vr-npovr28onap1xxxxxx
     *
     * @var string
     */
    public $virtualResourceId;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'virtualResourceId' => 'VirtualResourceId',
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
        if (null !== $this->virtualResourceId) {
            $res['VirtualResourceId'] = $this->virtualResourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualResourceResponseBody
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
        if (isset($map['VirtualResourceId'])) {
            $model->virtualResourceId = $map['VirtualResourceId'];
        }

        return $model;
    }
}
