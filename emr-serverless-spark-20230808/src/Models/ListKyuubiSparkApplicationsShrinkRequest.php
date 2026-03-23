<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListKyuubiSparkApplicationsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $endTimeShrink;

    /**
     * @var string
     */
    public $latestSqlStatementStatuses;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $minDuration;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderByShrink;

    /**
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $startTimeShrink;

    /**
     * @var string
     */
    public $states;
    protected $_name = [
        'applicationId' => 'applicationId',
        'applicationName' => 'applicationName',
        'endTimeShrink' => 'endTime',
        'latestSqlStatementStatuses' => 'latestSqlStatementStatuses',
        'maxResults' => 'maxResults',
        'minDuration' => 'minDuration',
        'nextToken' => 'nextToken',
        'orderByShrink' => 'orderBy',
        'resourceQueueId' => 'resourceQueueId',
        'sort' => 'sort',
        'startTimeShrink' => 'startTime',
        'states' => 'states',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['applicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }

        if (null !== $this->endTimeShrink) {
            $res['endTime'] = $this->endTimeShrink;
        }

        if (null !== $this->latestSqlStatementStatuses) {
            $res['latestSqlStatementStatuses'] = $this->latestSqlStatementStatuses;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->minDuration) {
            $res['minDuration'] = $this->minDuration;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderByShrink) {
            $res['orderBy'] = $this->orderByShrink;
        }

        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->startTimeShrink) {
            $res['startTime'] = $this->startTimeShrink;
        }

        if (null !== $this->states) {
            $res['states'] = $this->states;
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
        if (isset($map['applicationId'])) {
            $model->applicationId = $map['applicationId'];
        }

        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }

        if (isset($map['endTime'])) {
            $model->endTimeShrink = $map['endTime'];
        }

        if (isset($map['latestSqlStatementStatuses'])) {
            $model->latestSqlStatementStatuses = $map['latestSqlStatementStatuses'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['minDuration'])) {
            $model->minDuration = $map['minDuration'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['orderBy'])) {
            $model->orderByShrink = $map['orderBy'];
        }

        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['startTime'])) {
            $model->startTimeShrink = $map['startTime'];
        }

        if (isset($map['states'])) {
            $model->states = $map['states'];
        }

        return $model;
    }
}
