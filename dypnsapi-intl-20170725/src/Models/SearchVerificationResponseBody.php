<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapiintl\V20170725\Models;

use AlibabaCloud\Tea\Model;

class SearchVerificationResponseBody extends Model
{
    /**
     * @description The HTTP status code that was returned for the request.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The message that was returned.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The data that was returned for the request. Example: "Model": { "records": \[ { "sendDate":, "channel": "", "serviceSid": "", "to": "", "updatedDate":, "verificationId": "", "status": "" } ], "pageNo": , "totalPage": 1, "pageSize": 20, "totalCount": 1, }
     *
     * @var mixed[]
     */
    public $model;

    /**
     * @description The ID of the request. An ID is a unique identifier that Alibaba Cloud generates for a request.
     *
     * @example HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values: true: The request was successful. false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'model'     => 'Model',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
     * @return SearchVerificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
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
