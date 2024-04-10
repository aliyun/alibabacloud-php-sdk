<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListScanMaliciousFileByTaskResponseBody;

use AlibabaCloud\Tea\Model;

class scanMaliciousFiles extends Model
{
    /**
     * @example 2023-04-10 11:42:06
     *
     * @var int
     */
    public $createTime;

    /**
     * @example tenant/0000000000000000/
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 2023-04-10 11:42:06
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @example remind
     *
     * @var string
     */
    public $level;

    /**
     * @example e76c9759783cbbc9be0ff91ca3xxxxxx
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @var string
     */
    public $maliciousName;

    /**
     * @example fe2d8980-de45-4f55-b57d-e438e6d2e972
     *
     * @var string
     */
    public $scanTaskId;

    /**
     * @example 2023-04-10 11:42:06
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'filePath'      => 'FilePath',
        'firstScanTime' => 'FirstScanTime',
        'level'         => 'Level',
        'maliciousMd5'  => 'MaliciousMd5',
        'maliciousName' => 'MaliciousName',
        'scanTaskId'    => 'ScanTaskId',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return scanMaliciousFiles
     */
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
