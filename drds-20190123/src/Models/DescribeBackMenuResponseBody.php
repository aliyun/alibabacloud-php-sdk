<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody\list_;
use AlibabaCloud\Tea\Model;

class DescribeBackMenuResponseBody extends Model
{
    /**
     * @description The backup information list.
     *
     * @var list_
     */
    public $list;

    /**
     * @description The ID of the request.
     *
     * @example 60C21BE4-EDFE-454C-95ED-3A5C74******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of request.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'list'      => 'List',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackMenuResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
