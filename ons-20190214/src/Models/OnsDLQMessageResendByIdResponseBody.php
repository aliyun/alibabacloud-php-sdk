<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageResendByIdResponseBody\data;
use AlibabaCloud\Tea\Model;

class OnsDLQMessageResendByIdResponseBody extends Model
{
    /**
     * @description The returned messages.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example D94CC769-4DC3-4690-A868-9D0631B1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return OnsDLQMessageResendByIdResponseBody
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
