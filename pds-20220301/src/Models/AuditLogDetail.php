<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class AuditLogDetail extends Model
{
    /**
     * @var DriveLogDetail
     */
    public $driveLogDetail;

    /**
     * @var FileLogDetail
     */
    public $fileLogDetail;

    /**
     * @var UserLogDetail
     */
    public $userLogDetail;
    protected $_name = [
        'driveLogDetail' => 'drive_log_detail',
        'fileLogDetail' => 'file_log_detail',
        'userLogDetail' => 'user_log_detail',
    ];

    public function validate()
    {
        if (null !== $this->driveLogDetail) {
            $this->driveLogDetail->validate();
        }
        if (null !== $this->fileLogDetail) {
            $this->fileLogDetail->validate();
        }
        if (null !== $this->userLogDetail) {
            $this->userLogDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveLogDetail) {
            $res['drive_log_detail'] = null !== $this->driveLogDetail ? $this->driveLogDetail->toArray($noStream) : $this->driveLogDetail;
        }

        if (null !== $this->fileLogDetail) {
            $res['file_log_detail'] = null !== $this->fileLogDetail ? $this->fileLogDetail->toArray($noStream) : $this->fileLogDetail;
        }

        if (null !== $this->userLogDetail) {
            $res['user_log_detail'] = null !== $this->userLogDetail ? $this->userLogDetail->toArray($noStream) : $this->userLogDetail;
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
        if (isset($map['drive_log_detail'])) {
            $model->driveLogDetail = DriveLogDetail::fromMap($map['drive_log_detail']);
        }

        if (isset($map['file_log_detail'])) {
            $model->fileLogDetail = FileLogDetail::fromMap($map['file_log_detail']);
        }

        if (isset($map['user_log_detail'])) {
            $model->userLogDetail = UserLogDetail::fromMap($map['user_log_detail']);
        }

        return $model;
    }
}
