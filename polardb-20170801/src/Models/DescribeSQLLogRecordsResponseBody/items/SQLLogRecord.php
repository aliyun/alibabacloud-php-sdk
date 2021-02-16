<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSQLLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLLogRecord extends Model
{
    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $updateRows;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $threadID;

    /**
     * @var string
     */
    public $originTime;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var int
     */
    public $consume;

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
    public $vip;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $sqlType;
    protected $_name = [
        'hostAddress' => 'HostAddress',
        'SQLText'     => 'SQLText',
        'updateRows'  => 'UpdateRows',
        'state'       => 'State',
        'threadID'    => 'ThreadID',
        'originTime'  => 'OriginTime',
        'insName'     => 'InsName',
        'scanRows'    => 'ScanRows',
        'consume'     => 'Consume',
        'DBName'      => 'DBName',
        'executeTime' => 'ExecuteTime',
        'vip'         => 'Vip',
        'accountName' => 'AccountName',
        'sqlType'     => 'SqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->updateRows) {
            $res['UpdateRows'] = $this->updateRows;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }
        if (null !== $this->originTime) {
            $res['OriginTime'] = $this->originTime;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->consume) {
            $res['Consume'] = $this->consume;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLLogRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['UpdateRows'])) {
            $model->updateRows = $map['UpdateRows'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }
        if (isset($map['OriginTime'])) {
            $model->originTime = $map['OriginTime'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['Consume'])) {
            $model->consume = $map['Consume'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        return $model;
    }
}
