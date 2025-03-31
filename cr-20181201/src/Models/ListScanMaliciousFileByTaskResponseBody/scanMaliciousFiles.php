<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListScanMaliciousFileByTaskResponseBody;

use AlibabaCloud\Dara\Model;

class scanMaliciousFiles extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $firstScanTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $maliciousMd5;

    /**
     * @var string
     */
    public $maliciousName;

    /**
     * @var string
     */
    public $scanTaskId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'filePath' => 'FilePath',
        'firstScanTime' => 'FirstScanTime',
        'level' => 'Level',
        'maliciousMd5' => 'MaliciousMd5',
        'maliciousName' => 'MaliciousName',
        'scanTaskId' => 'ScanTaskId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }

        if (null !== $this->maliciousName) {
            $res['MaliciousName'] = $this->maliciousName;
        }

        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }

        if (isset($map['MaliciousName'])) {
            $model->maliciousName = $map['MaliciousName'];
        }

        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
