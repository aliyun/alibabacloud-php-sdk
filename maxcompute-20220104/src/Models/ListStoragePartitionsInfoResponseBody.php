<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody\data;

class ListStoragePartitionsInfoResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var int
     */
    public $httpCode;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'data',
        'errorCode' => 'errorCode',
        'errorMsg'  => 'errorMsg',
        'httpCode'  => 'httpCode',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
