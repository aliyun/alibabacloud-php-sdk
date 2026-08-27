<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateAnnouncementResponseBody extends Model
{
    /**
     * @var int
     */
    public $announcementId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $createdBy;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $publishedAt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'announcementId' => 'announcementId',
        'code' => 'code',
        'createdBy' => 'createdBy',
        'message' => 'message',
        'publishedAt' => 'publishedAt',
        'requestId' => 'requestId',
        'sourceType' => 'sourceType',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->announcementId) {
            $res['announcementId'] = $this->announcementId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->publishedAt) {
            $res['publishedAt'] = $this->publishedAt;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['announcementId'])) {
            $model->announcementId = $map['announcementId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['publishedAt'])) {
            $model->publishedAt = $map['publishedAt'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
