<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data;

class ListJobInfosResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;
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

        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
