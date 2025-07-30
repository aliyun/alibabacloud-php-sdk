<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetMiningTaskResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123.22.com/manger/static/login-back.jpg
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 123.22.com/manger/static/login-back.md
     *
     * @var string
     */
    public $filePathMd;

    /**
     * @example 20201231de3d34ec-40fa-4a55-8d27-76ea*****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example finish
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'filePath' => 'FilePath',
        'filePathMd' => 'FilePathMd',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->filePathMd) {
            $res['FilePathMd'] = $this->filePathMd;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FilePathMd'])) {
            $model->filePathMd = $map['FilePathMd'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
