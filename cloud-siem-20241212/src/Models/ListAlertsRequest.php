<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListAlertsRequest extends Model
{
    /**
     * @var string[]
     */
    public $alertLevel;

    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $orderFieldName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryCondition;

    /**
     * @var string
     */
    public $queryViewId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'alertLevel' => 'AlertLevel',
        'alertUuid' => 'AlertUuid',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderDirection' => 'OrderDirection',
        'orderFieldName' => 'OrderFieldName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryCondition' => 'QueryCondition',
        'queryViewId' => 'QueryViewId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->alertLevel)) {
            Model::validateArray($this->alertLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevel) {
            if (\is_array($this->alertLevel)) {
                $res['AlertLevel'] = [];
                $n1 = 0;
                foreach ($this->alertLevel as $item1) {
                    $res['AlertLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }

        if (null !== $this->orderFieldName) {
            $res['OrderFieldName'] = $this->orderFieldName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
        }

        if (null !== $this->queryViewId) {
            $res['QueryViewId'] = $this->queryViewId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AlertLevel'])) {
            if (!empty($map['AlertLevel'])) {
                $model->alertLevel = [];
                $n1 = 0;
                foreach ($map['AlertLevel'] as $item1) {
                    $model->alertLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        if (isset($map['OrderFieldName'])) {
            $model->orderFieldName = $map['OrderFieldName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
        }

        if (isset($map['QueryViewId'])) {
            $model->queryViewId = $map['QueryViewId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
