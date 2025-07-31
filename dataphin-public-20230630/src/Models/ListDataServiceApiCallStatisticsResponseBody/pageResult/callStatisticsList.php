<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class callStatisticsList extends Model
{
    /**
     * @example 1003
     *
     * @var int
     */
    public $apiId;

    /**
     * @example test
     *
     * @var string
     */
    public $apiName;

    /**
     * @var string[]
     */
    public $appNameList;

    /**
     * @example 1
     *
     * @var int
     */
    public $authorizedAppCount;

    /**
     * @example 11
     *
     * @var float
     */
    public $avgResponseTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $callCount;

    /**
     * @example 30012011
     *
     * @var string
     */
    public $creator;

    /**
     * @example 22
     *
     * @var string
     */
    public $errorCount;

    /**
     * @example 23.2%
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
     * @example 23.2%
     *
     * @var string
     */
    public $offlineRate;

    /**
     * @example 101201
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 1121
     *
     * @var int
     */
    public $sqlId;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'appNameList' => 'AppNameList',
        'authorizedAppCount' => 'AuthorizedAppCount',
        'avgResponseTime' => 'AvgResponseTime',
        'callCount' => 'CallCount',
        'creator' => 'Creator',
        'errorCount' => 'ErrorCount',
        'errorRate' => 'ErrorRate',
        'lastCallTime' => 'LastCallTime',
        'offlineRate' => 'OfflineRate',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'sqlId' => 'SqlId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appNameList) {
            $res['AppNameList'] = $this->appNameList;
        }
        if (null !== $this->authorizedAppCount) {
            $res['AuthorizedAppCount'] = $this->authorizedAppCount;
        }
        if (null !== $this->avgResponseTime) {
            $res['AvgResponseTime'] = $this->avgResponseTime;
        }
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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
        if (null !== $this->offlineRate) {
            $res['OfflineRate'] = $this->offlineRate;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callStatisticsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AppNameList'])) {
            if (!empty($map['AppNameList'])) {
                $model->appNameList = $map['AppNameList'];
            }
        }
        if (isset($map['AuthorizedAppCount'])) {
            $model->authorizedAppCount = $map['AuthorizedAppCount'];
        }
        if (isset($map['AvgResponseTime'])) {
            $model->avgResponseTime = $map['AvgResponseTime'];
        }
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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
        if (isset($map['OfflineRate'])) {
            $model->offlineRate = $map['OfflineRate'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        return $model;
    }
}
