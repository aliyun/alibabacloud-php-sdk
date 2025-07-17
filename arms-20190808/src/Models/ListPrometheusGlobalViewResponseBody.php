<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListPrometheusGlobalViewResponseBody extends Model
{
    /**
     * @description Status code. Description 200 means success.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The list of global aggregation instances. The value of this parameter is a string in the JSON format.
     *
     * @example [ {groupName: "the name of the global aggregation instance", clusterId: "global-v2-clusterid", endpoint: "cn-hangzhou"}, // ..... more items ]
     *
     * @var string
     */
    public $data;

    /**
     * @description More information.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example DBDCE95A-A0DD-5FC5-97CC-EEFC3D814385
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
     * @return ListPrometheusGlobalViewResponseBody
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
