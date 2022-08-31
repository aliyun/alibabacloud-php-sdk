<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList\fpShotFile\inputFile;
use AlibabaCloud\Tea\Model;

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
        'fileId'     => 'FileId',
        'inputFile'  => 'InputFile',
        'primaryKey' => 'PrimaryKey',
        'storeTime'  => 'StoreTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->storeTime) {
            $res['StoreTime'] = $this->storeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotFile
     */
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
