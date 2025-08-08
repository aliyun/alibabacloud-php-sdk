<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobRequest\uploadTarget;

class CreateUploadOSSFileJobRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileSource;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var uploadTarget
     */
    public $uploadTarget;
    protected $_name = [
        'fileName' => 'FileName',
        'fileSource' => 'FileSource',
        'tid' => 'Tid',
        'uploadTarget' => 'UploadTarget',
    ];

    public function validate()
    {
        if (null !== $this->uploadTarget) {
            $this->uploadTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSource) {
            $res['FileSource'] = $this->fileSource;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->uploadTarget) {
            $res['UploadTarget'] = null !== $this->uploadTarget ? $this->uploadTarget->toArray($noStream) : $this->uploadTarget;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSource'])) {
            $model->fileSource = $map['FileSource'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['UploadTarget'])) {
            $model->uploadTarget = uploadTarget::fromMap($map['UploadTarget']);
        }

        return $model;
    }
}
