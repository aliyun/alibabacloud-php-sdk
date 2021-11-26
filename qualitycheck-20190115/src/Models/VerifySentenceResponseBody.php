<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data;
use AlibabaCloud\Tea\Model;

class VerifySentenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @var int
     */
    public $incorrectWords;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sourceRole;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $targetRole;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'incorrectWords' => 'IncorrectWords',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'sourceRole'     => 'SourceRole',
        'success'        => 'Success',
        'targetRole'     => 'TargetRole',
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceRole) {
            $res['SourceRole'] = $this->sourceRole;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->targetRole) {
            $res['TargetRole'] = $this->targetRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifySentenceResponseBody
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
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceRole'])) {
            $model->sourceRole = $map['SourceRole'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TargetRole'])) {
            $model->targetRole = $map['TargetRole'];
        }

        return $model;
    }
}
