<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponseBody\result;

use AlibabaCloud\Tea\Model;

class receivers extends Model
{
    /**
     * @description The ID of the authorization object.
     *
     * @example 121344444790****
     *
     * @var string
     */
    public $receiverId;

    /**
     * @description The type of the authorization object. Valid values:
     *
     *   0: user
     *   1: user group
     *
     * @example 0
     *
     * @var int
     */
    public $receiverType;
    protected $_name = [
        'receiverId'   => 'ReceiverId',
        'receiverType' => 'ReceiverType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }
        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receivers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }
        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }

        return $model;
    }
}
