<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleActionResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $actionId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'success'      => 'Success',
        'errorMessage' => 'ErrorMessage',
        'actionId'     => 'ActionId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('actionId', $this->actionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleActionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }

        return $model;
    }
}
