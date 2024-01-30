<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models;

use AlibabaCloud\Tea\Model;

class MetaSearchResponseBody extends Model
{
    /**
     * @example BizError
     *
     * @var string
     */
    public $code;

    /**
     * @example {
     * "tableDescription": "testeee",
     * "instanceId": 2103***,
     * "port": 3306,
     * "dbId": 35714***,
     * "searchName": "test0913@rm-xxx.mysql.rds.aliyuncs.com:3306 [rm-xxx]",
     * "tenantId": 432532***,
     * "instanceResourceId": "rm-xxx",
     * "tableId": 1021306***,
     * }
     * @var string
     */
    public $data;

    /**
     * @example BizError
     *
     * @var string
     */
    public $message;

    /**
     * @example 17D76348-FD6B-5F95-B7B8-4AE9B6785B2B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetaSearchResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
