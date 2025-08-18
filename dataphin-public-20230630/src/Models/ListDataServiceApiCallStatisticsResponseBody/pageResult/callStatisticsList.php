<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallStatisticsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;

class callStatisticsList extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string[]
     */
    public $appNameList;

    /**
     * @var int
     */
    public $authorizedAppCount;

    /**
     * @var float
     */
    public $avgResponseTime;

    /**
     * @var int
     */
    public $callCount;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $errorCount;

    /**
     * @var string
     */
    public $errorRate;

    /**
     * @var string
     */
    public $lastCallTime;

    /**
     * @var string
     */
    public $offlineRate;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
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

    public function validate()
    {
        if (\is_array($this->appNameList)) {
            Model::validateArray($this->appNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->appNameList) {
            if (\is_array($this->appNameList)) {
                $res['AppNameList'] = [];
                $n1 = 0;
                foreach ($this->appNameList as $item1) {
                    $res['AppNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->appNameList = [];
                $n1 = 0;
                foreach ($map['AppNameList'] as $item1) {
                    $model->appNameList[$n1] = $item1;
                    ++$n1;
                }
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
