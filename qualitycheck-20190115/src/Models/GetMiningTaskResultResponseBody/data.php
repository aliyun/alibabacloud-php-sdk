<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetMiningTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetMiningTaskResultResponseBody\data\filePathList;

class data extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var filePathList[]
     */
    public $filePathList;

    /**
     * @var string
     */
    public $filePathMd;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'filePath' => 'FilePath',
        'filePathList' => 'FilePathList',
        'filePathMd' => 'FilePathMd',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->filePathList)) {
            Model::validateArray($this->filePathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->filePathList) {
            if (\is_array($this->filePathList)) {
                $res['FilePathList'] = [];
                $n1 = 0;
                foreach ($this->filePathList as $item1) {
                    $res['FilePathList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FilePathList'])) {
            if (!empty($map['FilePathList'])) {
                $model->filePathList = [];
                $n1 = 0;
                foreach ($map['FilePathList'] as $item1) {
                    $model->filePathList[$n1] = filePathList::fromMap($item1);
                    ++$n1;
                }
            }
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
