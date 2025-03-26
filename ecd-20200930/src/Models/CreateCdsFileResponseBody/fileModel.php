<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileResponseBody;

use AlibabaCloud\Dara\Model;

class fileModel extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'fileId' => 'FileId',
        'uploadId' => 'UploadId',
        'uploadUrl' => 'UploadUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
