<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SyncRecordingRulesResponseBody extends Model
{
    /**
     * @description 状态码。200表示成功。
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The struct returned.
     *
     * @example { "data":[ "c06ca68cd16f14f52bb07772eda\\*\\*\\*", "c33dd70a0ac184c1b879d807ab2\\*\\*\\*", "c384cf7e4dcb543e6ac8c7d4dd3\\*\\*\\*", "ce30f833bc4a04a56a06b070319\\*\\*\\*" ], "message":"IDs of Clusters to which the aggregation rule failed to be synchronized", "success":true }
     *
     * @var string
     */
    public $data;

    /**
     * @description 返回结果的提示信息。
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 1A9C645C-C83F-4C9D-8CCB-29BEC9E1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncRecordingRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
