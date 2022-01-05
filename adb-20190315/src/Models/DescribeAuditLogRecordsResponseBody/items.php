<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $connId;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $processID;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $SQLType;

    /**
     * @var string
     */
    public $succeed;

    /**
     * @var string
     */
    public $totalTime;
    protected $_name = [
        'connId'      => 'ConnId',
        'DBName'      => 'DBName',
        'executeTime' => 'ExecuteTime',
        'hostAddress' => 'HostAddress',
        'processID'   => 'ProcessID',
        'SQLText'     => 'SQLText',
        'SQLType'     => 'SQLType',
        'succeed'     => 'Succeed',
        'totalTime'   => 'TotalTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connId) {
            $res['ConnId'] = $this->connId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->succeed) {
            $res['Succeed'] = $this->succeed;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnId'])) {
            $model->connId = $map['ConnId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['Succeed'])) {
            $model->succeed = $map['Succeed'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }

        return $model;
    }
}
