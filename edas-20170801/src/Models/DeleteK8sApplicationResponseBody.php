<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteK8sApplicationResponseBody extends Model
{
    /**
     * @description The ID of the change process for this operation. If an instance on which the application is deployed is running or a Server Load Balancer (SLB) instance is bound to the application, this operation generates a change process ID and deletes the application. You can call the GetChangeOrderInfo operation to query the progress of this operation. You can determine whether the operation is successful based on the value of the Code parameter.
     *
     * @example 0a34531a-****-49dc-8e7f-0cbbbfa12cf0
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example a5281053-08e4-47a5-b2ab-5c0323******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return DeleteK8sApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
