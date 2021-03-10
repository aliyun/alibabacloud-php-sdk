<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateUploadOSSFileJobRequest\uploadTarget;
use AlibabaCloud\Tea\Model;

class CreateUploadOSSFileJobRequest extends Model
{
    /**
     * @var string
     */
    public $fileSource;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $uploadType;

    /**
     * @var uploadTarget
     */
    public $uploadTarget;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'fileSource'   => 'FileSource',
        'fileName'     => 'FileName',
        'uploadType'   => 'UploadType',
        'uploadTarget' => 'UploadTarget',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSource) {
            $res['FileSource'] = $this->fileSource;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->uploadTarget) {
            $res['UploadTarget'] = null !== $this->uploadTarget ? $this->uploadTarget->toMap() : null;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadOSSFileJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSource'])) {
            $model->fileSource = $map['FileSource'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['UploadTarget'])) {
            $model->uploadTarget = uploadTarget::fromMap($map['UploadTarget']);
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
