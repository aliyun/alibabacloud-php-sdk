<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\AppendInstancesToPrometheusGlobalViewResponseBody\data;
use AlibabaCloud\Tea\Model;

class AppendInstancesToPrometheusGlobalViewResponseBody extends Model
{
    /**
     * @description Status code. 200 means success, other status codes are exceptions.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about the array object.
     *
     * @var data
     */
    public $data;

    /**
     * @description Additional message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 27E653FA-5958-45BE-8AA9-14D884DC****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return AppendInstancesToPrometheusGlobalViewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
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
