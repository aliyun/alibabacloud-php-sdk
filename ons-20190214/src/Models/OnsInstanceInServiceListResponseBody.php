<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data;
use AlibabaCloud\Tea\Model;

class OnsInstanceInServiceListResponseBody extends Model
{
    /**
     * @description The returned list of all published instances.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example 0598E46F-DB06-40E2-AD7B-C45923EE****
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
     * @return OnsInstanceInServiceListResponseBody
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
