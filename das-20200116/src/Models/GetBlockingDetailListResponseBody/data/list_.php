<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetBlockingDetailListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $batchId;
    /**
     * @var string
     */
    public $clientAppName;
    /**
     * @var int
     */
    public $currentCollectionTime;
    /**
     * @var string
     */
    public $dataBase;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var string
     */
    public $loginId;
    /**
     * @var string
     */
    public $queryHash;
    /**
     * @var string
     */
    public $spid;
    /**
     * @var string
     */
    public $sqlText;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $waitTimeMs;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
