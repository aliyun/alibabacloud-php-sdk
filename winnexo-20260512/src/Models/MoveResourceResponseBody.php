<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class MoveResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

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
    public $sourceDirectoryId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $targetDirectoryId;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'sourceDirectoryId' => 'sourceDirectoryId',
        'sourceId' => 'sourceId',
        'success' => 'success',
        'targetDirectoryId' => 'targetDirectoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sourceDirectoryId) {
            $res['sourceDirectoryId'] = $this->sourceDirectoryId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->targetDirectoryId) {
            $res['targetDirectoryId'] = $this->targetDirectoryId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sourceDirectoryId'])) {
            $model->sourceDirectoryId = $map['sourceDirectoryId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['targetDirectoryId'])) {
            $model->targetDirectoryId = $map['targetDirectoryId'];
        }

        return $model;
    }
}
