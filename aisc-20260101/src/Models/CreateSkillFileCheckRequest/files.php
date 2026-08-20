<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckRequest;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $uploadKey;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'fileName' => 'FileName',
        'uploadKey' => 'UploadKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->uploadKey) {
            $res['UploadKey'] = $this->uploadKey;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['UploadKey'])) {
            $model->uploadKey = $map['UploadKey'];
        }

        return $model;
    }
}
