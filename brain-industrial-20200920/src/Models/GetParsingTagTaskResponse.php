<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class GetParsingTagTaskResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bool
     */
    public $pidTagTaskStatus;
    protected $_name = [
        'requestId'        => 'RequestId',
        'message'          => 'Message',
        'code'             => 'Code',
        'success'          => 'Success',
        'pidTagTaskStatus' => 'PidTagTaskStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('pidTagTaskStatus', $this->pidTagTaskStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->pidTagTaskStatus) {
            $res['PidTagTaskStatus'] = $this->pidTagTaskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParsingTagTaskResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['PidTagTaskStatus'])) {
            $model->pidTagTaskStatus = $map['PidTagTaskStatus'];
        }

        return $model;
    }
}
