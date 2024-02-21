<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlConcurrencyControlRulesHistoryResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The duration within which the SQL throttling rule takes effect. Unit: seconds.
     *
     * >  The throttling rule takes effect only within this duration.
     * @example 600
     *
     * @var int
     */
    public $concurrencyControlTime;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the throttling rule that is applied to the instance.
     *
     * @example 16
     *
     * @var int
     */
    public $itemId;

    /**
     * @description The hash value of the SQL keywords. The SQL keywords are contained in the SQL statements to which the throttling rule is applied.
     *
     * @example b0b8aceeb43baea87b219c81767b****
     *
     * @var string
     */
    public $keywordsHash;

    /**
     * @description The maximum number of concurrent SQL statements. Set this parameter to a positive integer.
     *
     * >  When the number of concurrent SQL statements that contain the specified keywords reaches this upper limit, the throttling rule is triggered.
     * @example 2
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description The keywords that are used to identify the SQL statements that need to be throttled.
     *
     * > SQL keywords are separated with tildes (~). When the number of concurrent SQL statements that contain all the specified SQL keywords reaches the specified upper limit, the throttling rule is triggered.
     * @example call~open~api~test~4~from~POP
     *
     * @var string
     */
    public $sqlKeywords;

    /**
     * @description The type of the SQL statements. Valid values:
     *
     * **SELECT**
     * **UPDATE**
     * **DELETE**
     *
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1608888296000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The state of the throttling rule. Valid values:
     *
     * **Open**: The throttling rule is in effect.
     * **Closed**: The throttling rule was in effect.
     *
     * @example Open
     *
     * @var string
     */
    public $status;

    /**
     * @description The user ID.
     *
     * @example testxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'concurrencyControlTime' => 'ConcurrencyControlTime',
        'instanceId'             => 'InstanceId',
        'itemId'                 => 'ItemId',
        'keywordsHash'           => 'KeywordsHash',
        'maxConcurrency'         => 'MaxConcurrency',
        'sqlKeywords'            => 'SqlKeywords',
        'sqlType'                => 'SqlType',
        'startTime'              => 'StartTime',
        'status'                 => 'Status',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rules
     */
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
