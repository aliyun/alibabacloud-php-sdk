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
    public $fileName;

    /**
     * @var string
     */
    public $fileSource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var uploadTarget
     */
    public $uploadTarget;
    protected $_name = [
        'fileName'     => 'FileName',
        'fileSource'   => 'FileSource',
        'regionId'     => 'RegionId',
        'tid'          => 'Tid',
        'uploadTarget' => 'UploadTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSource) {
            $res['FileSource'] = $this->fileSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uploadTarget) {
            $res['UploadTarget'] = null !== $this->uploadTarget ? $this->uploadTarget->toMap() : null;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSource'])) {
            $model->fileSource = $map['FileSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
