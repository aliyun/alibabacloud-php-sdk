<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var int
     */
    public $expireSec;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $responseContentType;

    /**
     * @var string
     */
    public $shareId;
    protected $_name = [
        'driveId' => 'drive_id',
        'expireSec' => 'expire_sec',
        'fileId' => 'file_id',
        'fileName' => 'file_name',
        'responseContentType' => 'response_content_type',
        'shareId' => 'share_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->expireSec) {
            $res['expire_sec'] = $this->expireSec;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }

        if (null !== $this->responseContentType) {
            $res['response_content_type'] = $this->responseContentType;
        }

        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['expire_sec'])) {
            $model->expireSec = $map['expire_sec'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }

        if (isset($map['response_content_type'])) {
            $model->responseContentType = $map['response_content_type'];
        }

        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }

        return $model;
    }
}
