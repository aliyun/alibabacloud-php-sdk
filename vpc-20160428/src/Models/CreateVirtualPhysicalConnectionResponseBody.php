<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualPhysicalConnectionResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Vpconn的实例ID
     *
     * @var string
     */
    public $virtualPhysicalConnection;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'virtualPhysicalConnection' => 'VirtualPhysicalConnection',
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
        if (null !== $this->virtualPhysicalConnection) {
            $res['VirtualPhysicalConnection'] = $this->virtualPhysicalConnection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualPhysicalConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualPhysicalConnection'])) {
            $model->virtualPhysicalConnection = $map['VirtualPhysicalConnection'];
        }

        return $model;
    }
}
