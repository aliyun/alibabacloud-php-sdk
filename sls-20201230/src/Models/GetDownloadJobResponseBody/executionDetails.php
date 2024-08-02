<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody;

use AlibabaCloud\Tea\Model;

class executionDetails extends Model
{
    /**
     * @example EXSFGSDASDASDG123ASD
     *
     * @var string
     */
    public $checkSum;

    /**
     * @description 下载错误信息
     *
     * @example timeout
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 下载执行时间
     *
     * @example 123
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description 下载结果链接
     *
     * @example https://xxx.csv.zst?xxx
     *
     * @var string
     */
    public $filePath;

    /**
     * @description 下载文件大小
     *
     * @example 123456
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description 下载日志条数
     *
     * @example 123
     *
     * @var int
     */
    public $logCount;

    /**
     * @description 下载进度
     *
     * @example 100
     *
     * @var int
     */
    public $progress;
    protected $_name = [
        'checkSum'     => 'checkSum',
        'errorMessage' => 'errorMessage',
        'executeTime'  => 'executeTime',
        'filePath'     => 'filePath',
        'fileSize'     => 'fileSize',
        'logCount'     => 'logCount',
        'progress'     => 'progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkSum) {
            $res['checkSum'] = $this->checkSum;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->executeTime) {
            $res['executeTime'] = $this->executeTime;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->logCount) {
            $res['logCount'] = $this->logCount;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkSum'])) {
            $model->checkSum = $map['checkSum'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['executeTime'])) {
            $model->executeTime = $map['executeTime'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['logCount'])) {
            $model->logCount = $map['logCount'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
