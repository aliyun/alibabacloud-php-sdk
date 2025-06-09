<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody;

use AlibabaCloud\Dara\Model;

class executionDetails extends Model
{
    /**
     * @var string
     */
    public $checkSum;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $logCount;

    /**
     * @var string
     */
    public $notice;

    /**
     * @var int
     */
    public $progress;
    protected $_name = [
        'checkSum' => 'checkSum',
        'errorMessage' => 'errorMessage',
        'executeTime' => 'executeTime',
        'filePath' => 'filePath',
        'fileSize' => 'fileSize',
        'logCount' => 'logCount',
        'notice' => 'notice',
        'progress' => 'progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->notice) {
            $res['notice'] = $this->notice;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
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

        if (isset($map['notice'])) {
            $model->notice = $map['notice'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
