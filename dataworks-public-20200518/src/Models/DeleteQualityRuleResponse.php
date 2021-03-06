<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityRuleResponse extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var bool
     */
    public $data;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'data'           => 'Data',
        'errorMessage'   => 'ErrorMessage',
        'success'        => 'Success',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQualityRuleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
