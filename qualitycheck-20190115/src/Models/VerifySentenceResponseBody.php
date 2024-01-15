<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data;
use AlibabaCloud\Tea\Model;

class VerifySentenceResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example 2
     *
     * @var int
     */
    public $incorrectWords;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 106C6CA0-282D-4AF7-85F0-D2D24F4CE647
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $sourceRole;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1
     *
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
