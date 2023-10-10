<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeployK8sApplicationResponseBody extends Model
{
    /**
     * @description The ID of the change process. You can call the GetChangeOrderInfo operation to query the change process ID. For more information, see [GetChangeOrderInfo](~~62072~~).
     *
     * @example cd65b247-****-475b-ad4b-7039040d625c
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
     * @example a5281053-08e4-47a5-b2ab-5c0323de*****
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
     * @return DeployK8sApplicationResponseBody
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
