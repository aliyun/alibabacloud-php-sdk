<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\RecordFinishedFileRequest;

use AlibabaCloud\Tea\Model;

class fileFingerprintDTOList extends Model
{
    /**
     * @description 文件hash
     *
     * @var string
     */
    public $fileHash;

    /**
     * @description 文件大小
     *
     * @var int
     */
    public $fileSize;
    protected $_name = [
        'fileHash' => 'FileHash',
        'fileSize' => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileFingerprintDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
