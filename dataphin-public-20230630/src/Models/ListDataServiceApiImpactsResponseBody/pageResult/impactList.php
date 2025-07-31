<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiImpactsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class impactList extends Model
{
    /**
     * @description apiNo
     *
     * @example 2011
     *
     * @var int
     */
    public $apiId;

    /**
     * @description appKey
     *
     * @example 1101
     *
     * @var int
     */
    public $appKey;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example 11
     *
     * @var int
     */
    public $callCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $clientFailCount;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example 1
     *
     * @var int
     */
    public $errorApiCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $errorCount;

    /**
     * @example 10.0
     *
     * @var string
     */
    public $errorRate;

    /**
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $lastCallTime;

    /**
     * @example 2025_0611_1011
     *
     * @var string
     */
    public $minute;

    /**
     * @example 1
     *
     * @var int
     */
    public $offlineCount;

    /**
     * @example 99
     *
     * @var string
     */
    public $successTimeCost;

    /**
     * @example 88
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 231
     *
     * @var string
     */
    public $totalTimeCost;
    protected $_name = [
        'apiId' => 'ApiId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'callCount' => 'CallCount',
        'clientFailCount' => 'ClientFailCount',
        'clientIp' => 'ClientIp',
        'errorApiCount' => 'ErrorApiCount',
        'errorCount' => 'ErrorCount',
        'errorRate' => 'ErrorRate',
        'lastCallTime' => 'LastCallTime',
        'minute' => 'Minute',
        'offlineCount' => 'OfflineCount',
        'successTimeCost' => 'SuccessTimeCost',
        'totalCount' => 'TotalCount',
        'totalTimeCost' => 'TotalTimeCost',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }
        if (null !== $this->clientFailCount) {
            $res['ClientFailCount'] = $this->clientFailCount;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->errorApiCount) {
            $res['ErrorApiCount'] = $this->errorApiCount;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->errorRate) {
            $res['ErrorRate'] = $this->errorRate;
        }
        if (null !== $this->lastCallTime) {
            $res['LastCallTime'] = $this->lastCallTime;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }
        if (null !== $this->offlineCount) {
            $res['OfflineCount'] = $this->offlineCount;
        }
        if (null !== $this->successTimeCost) {
            $res['SuccessTimeCost'] = $this->successTimeCost;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalTimeCost) {
            $res['TotalTimeCost'] = $this->totalTimeCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return impactList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }
        if (isset($map['ClientFailCount'])) {
            $model->clientFailCount = $map['ClientFailCount'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ErrorApiCount'])) {
            $model->errorApiCount = $map['ErrorApiCount'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['ErrorRate'])) {
            $model->errorRate = $map['ErrorRate'];
        }
        if (isset($map['LastCallTime'])) {
            $model->lastCallTime = $map['LastCallTime'];
        }
        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }
        if (isset($map['OfflineCount'])) {
            $model->offlineCount = $map['OfflineCount'];
        }
        if (isset($map['SuccessTimeCost'])) {
            $model->successTimeCost = $map['SuccessTimeCost'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalTimeCost'])) {
            $model->totalTimeCost = $map['TotalTimeCost'];
        }

        return $model;
    }
}
