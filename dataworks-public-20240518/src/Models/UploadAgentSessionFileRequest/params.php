<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UploadAgentSessionFileRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $contentMd5;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadMode;
    protected $_name = [
        'contentMd5' => 'ContentMd5',
        'name' => 'Name',
        'sessionId' => 'SessionId',
        'size' => 'Size',
        'uploadId' => 'UploadId',
        'uploadMode' => 'UploadMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentMd5) {
            $res['ContentMd5'] = $this->contentMd5;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        if (null !== $this->uploadMode) {
            $res['UploadMode'] = $this->uploadMode;
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
        if (isset($map['ContentMd5'])) {
            $model->contentMd5 = $map['ContentMd5'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        if (isset($map['UploadMode'])) {
            $model->uploadMode = $map['UploadMode'];
        }

        return $model;
    }
}
