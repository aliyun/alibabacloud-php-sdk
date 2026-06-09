<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeGlobalTimerRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var string
     */
    public $displayResultName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @var string
     */
    public $resultCategory;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var string
     */
    public $searchRegionId;

    /**
     * @var string
     */
    public $timerResult;

    /**
     * @var string[]
     */
    public $timerTypes;

    /**
     * @var string[]
     */
    public $wuyingServerIds;
    protected $_name = [
        'batchId' => 'BatchId',
        'desktopIds' => 'DesktopIds',
        'displayResultName' => 'DisplayResultName',
        'groupId' => 'GroupId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceTypes' => 'ResourceTypes',
        'resultCategory' => 'ResultCategory',
        'retryable' => 'Retryable',
        'searchRegionId' => 'SearchRegionId',
        'timerResult' => 'TimerResult',
        'timerTypes' => 'TimerTypes',
        'wuyingServerIds' => 'WuyingServerIds',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        if (\is_array($this->timerTypes)) {
            Model::validateArray($this->timerTypes);
        }
        if (\is_array($this->wuyingServerIds)) {
            Model::validateArray($this->wuyingServerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1 = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayResultName) {
            $res['DisplayResultName'] = $this->displayResultName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultCategory) {
            $res['ResultCategory'] = $this->resultCategory;
        }

        if (null !== $this->retryable) {
            $res['Retryable'] = $this->retryable;
        }

        if (null !== $this->searchRegionId) {
            $res['SearchRegionId'] = $this->searchRegionId;
        }

        if (null !== $this->timerResult) {
            $res['TimerResult'] = $this->timerResult;
        }

        if (null !== $this->timerTypes) {
            if (\is_array($this->timerTypes)) {
                $res['TimerTypes'] = [];
                $n1 = 0;
                foreach ($this->timerTypes as $item1) {
                    $res['TimerTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wuyingServerIds) {
            if (\is_array($this->wuyingServerIds)) {
                $res['WuyingServerIds'] = [];
                $n1 = 0;
                foreach ($this->wuyingServerIds as $item1) {
                    $res['WuyingServerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1 = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplayResultName'])) {
            $model->displayResultName = $map['DisplayResultName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultCategory'])) {
            $model->resultCategory = $map['ResultCategory'];
        }

        if (isset($map['Retryable'])) {
            $model->retryable = $map['Retryable'];
        }

        if (isset($map['SearchRegionId'])) {
            $model->searchRegionId = $map['SearchRegionId'];
        }

        if (isset($map['TimerResult'])) {
            $model->timerResult = $map['TimerResult'];
        }

        if (isset($map['TimerTypes'])) {
            if (!empty($map['TimerTypes'])) {
                $model->timerTypes = [];
                $n1 = 0;
                foreach ($map['TimerTypes'] as $item1) {
                    $model->timerTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WuyingServerIds'])) {
            if (!empty($map['WuyingServerIds'])) {
                $model->wuyingServerIds = [];
                $n1 = 0;
                foreach ($map['WuyingServerIds'] as $item1) {
                    $model->wuyingServerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
