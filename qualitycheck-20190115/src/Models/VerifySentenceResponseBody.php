<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data;
use AlibabaCloud\Tea\Model;

class VerifySentenceResponseBody extends Model
{
    /**
     * @var int
     */
    public $sourceRole;

    /**
     * @var int
     */
    public $incorrectWords;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $targetRole;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'sourceRole'     => 'SourceRole',
        'incorrectWords' => 'IncorrectWords',
        'requestId'      => 'RequestId',
        'message'        => 'Message',
        'targetRole'     => 'TargetRole',
        'data'           => 'Data',
        'code'           => 'Code',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceRole) {
            $res['SourceRole'] = $this->sourceRole;
        }
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->targetRole) {
            $res['TargetRole'] = $this->targetRole;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['SourceRole'])) {
            $model->sourceRole = $map['SourceRole'];
        }
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TargetRole'])) {
            $model->targetRole = $map['TargetRole'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
