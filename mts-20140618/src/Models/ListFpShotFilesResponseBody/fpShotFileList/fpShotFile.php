<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList\fpShotFile\inputFile;

class fpShotFile extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var inputFile
     */
    public $inputFile;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $storeTime;
    protected $_name = [
        'fileId' => 'FileId',
        'inputFile' => 'InputFile',
        'primaryKey' => 'PrimaryKey',
        'storeTime' => 'StoreTime',
    ];

    public function validate()
    {
        if (null !== $this->inputFile) {
            $this->inputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toArray($noStream) : $this->inputFile;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->storeTime) {
            $res['StoreTime'] = $this->storeTime;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['StoreTime'])) {
            $model->storeTime = $map['StoreTime'];
        }

        return $model;
    }
}
