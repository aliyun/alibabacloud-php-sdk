<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListProcessResponseBody;

use AlibabaCloud\Tea\Model;

class processes extends Model
{
    /**
     * @description The path to the process startup file.
     *
     * @example /root/bash1
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The primary key of the process information.
     *
     * @example 2100019
     *
     * @var int
     */
    public $id;

    /**
     * @description The trust score of the process.
     *
     * @example 99
     *
     * @var int
     */
    public $level;

    /**
     * @description The MD5 hash value of the process startup file.
     *
     * @example a28e8eba54ece1f3748d80e57dc89400
     *
     * @var string
     */
    public $md5;

    /**
     * @description The ID of the process.
     *
     * @example 53090
     *
     * @var int
     */
    public $processId;

    /**
     * @description The name of the process.
     *
     * @example vim
     *
     * @var string
     */
    public $processName;

    /**
     * @description The type of the process. Valid values:
     *
     *   **1**: trusted
     *   **2**: suspicious
     *   **3**: malicious
     *
     * @example 1
     *
     * @var int
     */
    public $processType;

    /**
     * @description Indicates whether the process is trusted. Valid values:
     *
     *   **1**: no
     *   **2**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'filePath' => 'FilePath',
        'id' => 'Id',
        'level' => 'Level',
        'md5' => 'Md5',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'processType' => 'ProcessType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
