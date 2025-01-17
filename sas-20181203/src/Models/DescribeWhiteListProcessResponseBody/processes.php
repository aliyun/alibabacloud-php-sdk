<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListProcessResponseBody;

use AlibabaCloud\Dara\Model;

class processes extends Model
{
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $level;
    /**
     * @var string
     */
    public $md5;
    /**
     * @var int
     */
    public $processId;
    /**
     * @var string
     */
    public $processName;
    /**
     * @var int
     */
    public $processType;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'filePath'    => 'FilePath',
        'id'          => 'Id',
        'level'       => 'Level',
        'md5'         => 'Md5',
        'processId'   => 'ProcessId',
        'processName' => 'ProcessName',
        'processType' => 'ProcessType',
        'status'      => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
