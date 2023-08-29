<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetLifecycleRuleResponseBody extends Model
{
    /**
     * @var LifecycleRule
     */
    public $data;

    /**
     * @description RequestId
     *
     * @example EDBC848F-7CC7-52E3-9FBF-924D09B5C27A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Success
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLifecycleRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = LifecycleRule::fromMap($map['Data']);
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
