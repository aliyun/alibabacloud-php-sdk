<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListUserFbIssuesResponseBody\data\feedbackIssueData;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'fileMd5'  => 'FileMd5',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileType' => 'FileType',
        'ossUrl'   => 'OssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
