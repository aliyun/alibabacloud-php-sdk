<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class UploadFileRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $originUrl;

    /**
     * @var string
     */
    public $targetPath;
    protected $_name = [
        'description' => 'Description',
        'fileName' => 'FileName',
        'md5' => 'Md5',
        'originUrl' => 'OriginUrl',
        'targetPath' => 'TargetPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->originUrl) {
            $res['OriginUrl'] = $this->originUrl;
        }

        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['OriginUrl'])) {
            $model->originUrl = $map['OriginUrl'];
        }

        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        return $model;
    }
}
