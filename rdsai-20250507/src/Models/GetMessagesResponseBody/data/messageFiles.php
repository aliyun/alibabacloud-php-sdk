<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class messageFiles extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadFileId;
    protected $_name = [
        'id' => 'Id',
        'previewUrl' => 'PreviewUrl',
        'type' => 'Type',
        'uploadFileId' => 'UploadFileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uploadFileId) {
            $res['UploadFileId'] = $this->uploadFileId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UploadFileId'])) {
            $model->uploadFileId = $map['UploadFileId'];
        }

        return $model;
    }
}
