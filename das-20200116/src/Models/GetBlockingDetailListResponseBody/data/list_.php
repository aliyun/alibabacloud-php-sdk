<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetBlockingDetailListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The batch ID.
     *
     * @example 1683530096156
     *
     * @var int
     */
    public $batchId;

    /**
     * @description The client name.
     *
     * @example .Net SqlClient Data Provider
     *
     * @var string
     */
    public $clientAppName;

    /**
     * @description The time when the blocking data was collected.
     *
     * @example 1700065800000
     *
     * @var int
     */
    public $currentCollectionTime;

    /**
     * @description The database name.
     *
     * @example school
     *
     * @var string
     */
    public $dataBase;

    /**
     * @description The client hostname.
     *
     * @example ALLBNMGTAPPRD01
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The username that is used for the logon.
     *
     * @example Cheney603
     *
     * @var string
     */
    public $loginId;

    /**
     * @description The hash value of the SQL statement.
     *
     * @example 6977DD06CD9CAFF2
     *
     * @var string
     */
    public $queryHash;

    /**
     * @description The session ID.
     *
     * @example 1717
     *
     * @var string
     */
    public $spid;

    /**
     * @description The SQL statement.
     *
     * @example select * from test1
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The time when the execution started.
     *
     * @example 1608888296000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The blocking duration. Unit: milliseconds.
     *
     * @example 30000
     *
     * @var int
     */
    public $waitTimeMs;

    /**
     * @description The wait type.
     *
     * @example MISCELLANEOUS
     *
     * @var string
     */
    public $waitType;
    protected $_name = [
        'batchId'               => 'BatchId',
        'clientAppName'         => 'ClientAppName',
        'currentCollectionTime' => 'CurrentCollectionTime',
        'dataBase'              => 'DataBase',
        'hostName'              => 'HostName',
        'loginId'               => 'LoginId',
        'queryHash'             => 'QueryHash',
        'spid'                  => 'Spid',
        'sqlText'               => 'SqlText',
        'startTime'             => 'StartTime',
        'waitTimeMs'            => 'WaitTimeMs',
        'waitType'              => 'WaitType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->clientAppName) {
            $res['ClientAppName'] = $this->clientAppName;
        }
        if (null !== $this->currentCollectionTime) {
            $res['CurrentCollectionTime'] = $this->currentCollectionTime;
        }
        if (null !== $this->dataBase) {
            $res['DataBase'] = $this->dataBase;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->loginId) {
            $res['LoginId'] = $this->loginId;
        }
        if (null !== $this->queryHash) {
            $res['QueryHash'] = $this->queryHash;
        }
        if (null !== $this->spid) {
            $res['Spid'] = $this->spid;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->waitTimeMs) {
            $res['WaitTimeMs'] = $this->waitTimeMs;
        }
        if (null !== $this->waitType) {
            $res['WaitType'] = $this->waitType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['ClientAppName'])) {
            $model->clientAppName = $map['ClientAppName'];
        }
        if (isset($map['CurrentCollectionTime'])) {
            $model->currentCollectionTime = $map['CurrentCollectionTime'];
        }
        if (isset($map['DataBase'])) {
            $model->dataBase = $map['DataBase'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['LoginId'])) {
            $model->loginId = $map['LoginId'];
        }
        if (isset($map['QueryHash'])) {
            $model->queryHash = $map['QueryHash'];
        }
        if (isset($map['Spid'])) {
            $model->spid = $map['Spid'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WaitTimeMs'])) {
            $model->waitTimeMs = $map['WaitTimeMs'];
        }
        if (isset($map['WaitType'])) {
            $model->waitType = $map['WaitType'];
        }

        return $model;
    }
}
