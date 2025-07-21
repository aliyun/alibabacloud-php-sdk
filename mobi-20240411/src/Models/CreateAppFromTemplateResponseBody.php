<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mobi\V20240411\Models;

use AlibabaCloud\SDK\Mobi\V20240411\Models\CreateAppFromTemplateResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateAppFromTemplateResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @description Id of the request
     *
     * @example 36F552F7-E61E-556A-9957-8284318D1B9C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppFromTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
