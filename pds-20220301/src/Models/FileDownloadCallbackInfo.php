<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FileDownloadCallbackInfo extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bucket' => 'bucket',
        'domainId' => 'domain_id',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'object' => 'object',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
