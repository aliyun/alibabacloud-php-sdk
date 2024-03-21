<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SaveSearchConditionResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $conditionContent;

    /**
     * @var int
     */
    public $conditionId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $umid;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'code'             => 'Code',
        'conditionContent' => 'ConditionContent',
        'conditionId'      => 'ConditionId',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'sessionId'        => 'SessionId',
        'success'          => 'Success',
        'tagName'          => 'TagName',
        'type'             => 'Type',
        'umid'             => 'Umid',
        'userId'           => 'UserId',
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
        if (null !== $this->conditionContent) {
            $res['ConditionContent'] = $this->conditionContent;
        }
        if (null !== $this->conditionId) {
            $res['ConditionId'] = $this->conditionId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSearchConditionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConditionContent'])) {
            $model->conditionContent = $map['ConditionContent'];
        }
        if (isset($map['ConditionId'])) {
            $model->conditionId = $map['ConditionId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
