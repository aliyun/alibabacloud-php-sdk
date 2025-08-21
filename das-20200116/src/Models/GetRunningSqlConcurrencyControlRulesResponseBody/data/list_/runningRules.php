<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class runningRules extends Model
{
    /**
     * @var int
     */
    public $concurrencyControlTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $keywordsHash;

    /**
     * @var string
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $sqlKeywords;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'concurrencyControlTime' => 'ConcurrencyControlTime',
        'instanceId' => 'InstanceId',
        'itemId' => 'ItemId',
        'keywordsHash' => 'KeywordsHash',
        'maxConcurrency' => 'MaxConcurrency',
        'sqlKeywords' => 'SqlKeywords',
        'sqlType' => 'SqlType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrencyControlTime) {
            $res['ConcurrencyControlTime'] = $this->concurrencyControlTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->keywordsHash) {
            $res['KeywordsHash'] = $this->keywordsHash;
        }

        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }

        if (null !== $this->sqlKeywords) {
            $res['SqlKeywords'] = $this->sqlKeywords;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ConcurrencyControlTime'])) {
            $model->concurrencyControlTime = $map['ConcurrencyControlTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['KeywordsHash'])) {
            $model->keywordsHash = $map['KeywordsHash'];
        }

        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }

        if (isset($map['SqlKeywords'])) {
            $model->sqlKeywords = $map['SqlKeywords'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
