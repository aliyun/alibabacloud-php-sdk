<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $executeTimestamp;

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

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'connId' => 'ConnId',
        'DBName' => 'DBName',
        'executeTime' => 'ExecuteTime',
        'executeTimestamp' => 'ExecuteTimestamp',
        'hostAddress' => 'HostAddress',
        'processID' => 'ProcessID',
        'SQLText' => 'SQLText',
        'SQLType' => 'SQLType',
        'succeed' => 'Succeed',
        'totalTime' => 'TotalTime',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->executeTimestamp) {
            $res['ExecuteTimestamp'] = $this->executeTimestamp;
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

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['ConnId'])) {
            $model->connId = $map['ConnId'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }

        if (isset($map['ExecuteTimestamp'])) {
            $model->executeTimestamp = $map['ExecuteTimestamp'];
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

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
