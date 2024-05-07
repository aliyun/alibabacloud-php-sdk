<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardsByNameResponseBody extends Model
{
    /**
     * @description Status Code. Description 200 indicates success.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned struct.
     *
     * @example [{"name":"Edas Ingress Url Analysis","type":"edas-ingress-url-analysis","url":"https://g.console.aliyun.com/d/1036052989950239-11040375-66-3/edas-ingress-url-analysis?var-clusterId=29ksa&var-regionId=cn-hangzhou"}]
     *
     * @var string
     */
    public $data;

    /**
     * @description Returns a hint message for the result.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request, You can use the ID to locate logs and troubleshoot issues.
     *
     * @example 2983BEF7-4A0D-47A2-94A2-8E9C5E63****
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
     * @return ListDashboardsByNameResponseBody
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
