<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class OfflineAnnouncementResponseBody extends Model
{
    /**
     * @var int
     */
    public $announcementId;

    /**
     * @var bool
     */
    public $changed;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $status;

    /**
     * @var int
     */
    public $updatedBy;
    protected $_name = [
        'announcementId' => 'announcementId',
        'changed' => 'changed',
        'code' => 'code',
        'gmtModified' => 'gmtModified',
        'message' => 'message',
        'requestId' => 'requestId',
        'status' => 'status',
        'updatedBy' => 'updatedBy',
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

        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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

        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}
