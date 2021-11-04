<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadOSSFileJobShrinkRequest extends Model
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
     * @var string
     */
    public $uploadTargetShrink;
    protected $_name = [
        'fileName'           => 'FileName',
        'fileSource'         => 'FileSource',
        'tid'                => 'Tid',
        'uploadTargetShrink' => 'UploadTarget',
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uploadTargetShrink) {
            $res['UploadTarget'] = $this->uploadTargetShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadOSSFileJobShrinkRequest
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UploadTarget'])) {
            $model->uploadTargetShrink = $map['UploadTarget'];
        }

        return $model;
    }
}
