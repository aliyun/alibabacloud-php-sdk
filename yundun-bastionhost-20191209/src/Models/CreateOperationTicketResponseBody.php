<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateOperationTicketResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $operationTicketId;

    /**
     * @example 0ECCC399-4D35-48A7-8379-5C6180E66235
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operationTicketId' => 'OperationTicketId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationTicketId) {
            $res['OperationTicketId'] = $this->operationTicketId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOperationTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationTicketId'])) {
            $model->operationTicketId = $map['OperationTicketId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
