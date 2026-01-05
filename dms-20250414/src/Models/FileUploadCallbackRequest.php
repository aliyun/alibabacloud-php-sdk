<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class FileUploadCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $callFrom;

    /**
     * @var string
     */
    public $dmsUnit;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $uploadLocation;
    protected $_name = [
        'callFrom' => 'CallFrom',
        'dmsUnit' => 'DmsUnit',
        'fileSize' => 'FileSize',
        'filename' => 'Filename',
        'uploadLocation' => 'UploadLocation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callFrom) {
            $res['CallFrom'] = $this->callFrom;
        }

        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }

        if (null !== $this->uploadLocation) {
            $res['UploadLocation'] = $this->uploadLocation;
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
        if (isset($map['CallFrom'])) {
            $model->callFrom = $map['CallFrom'];
        }

        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }

        if (isset($map['UploadLocation'])) {
            $model->uploadLocation = $map['UploadLocation'];
        }

        return $model;
    }
}
