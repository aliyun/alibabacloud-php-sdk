<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateModelApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $invokeEndpoint;

    /**
     * @var string
     */
    public $modelApiId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'invokeEndpoint' => 'InvokeEndpoint',
        'modelApiId' => 'ModelApiId',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeEndpoint) {
            $res['InvokeEndpoint'] = $this->invokeEndpoint;
        }

        if (null !== $this->modelApiId) {
            $res['ModelApiId'] = $this->modelApiId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeEndpoint'])) {
            $model->invokeEndpoint = $map['InvokeEndpoint'];
        }

        if (isset($map['ModelApiId'])) {
            $model->modelApiId = $map['ModelApiId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
