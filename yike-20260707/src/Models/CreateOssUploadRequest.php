<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class CreateOssUploadRequest extends Model
{
    /**
     * @var string
     */
    public $bizConfig;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $fileExt;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $targetBucket;
    protected $_name = [
        'bizConfig' => 'BizConfig',
        'credentialType' => 'CredentialType',
        'fileExt' => 'FileExt',
        'fileType' => 'FileType',
        'targetBucket' => 'TargetBucket',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizConfig) {
            $res['BizConfig'] = $this->bizConfig;
        }

        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->fileExt) {
            $res['FileExt'] = $this->fileExt;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
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
        if (isset($map['BizConfig'])) {
            $model->bizConfig = $map['BizConfig'];
        }

        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['FileExt'])) {
            $model->fileExt = $map['FileExt'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }

        return $model;
    }
}
