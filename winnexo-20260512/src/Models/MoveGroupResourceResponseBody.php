<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class MoveGroupResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $groupId;

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
     * @var string
     */
    public $targetDirectoryId;
    protected $_name = [
        'code' => 'code',
        'groupId' => 'groupId',
        'message' => 'message',
        'requestId' => 'requestId',
        'sourceDirectoryId' => 'sourceDirectoryId',
        'sourceId' => 'sourceId',
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

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
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

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
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

        if (isset($map['targetDirectoryId'])) {
            $model->targetDirectoryId = $map['targetDirectoryId'];
        }

        return $model;
    }
}
