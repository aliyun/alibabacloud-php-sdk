<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaLiveInputResponseBody extends Model
{
    /**
     * @description The ID of the input.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $inputId;

    /**
     * @description The ID of the request.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inputId'   => 'InputId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaLiveInputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
