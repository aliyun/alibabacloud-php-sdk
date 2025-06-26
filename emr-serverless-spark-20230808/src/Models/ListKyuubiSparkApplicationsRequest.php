<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsRequest\startTime;

class ListKyuubiSparkApplicationsRequest extends Model
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
     * @var string[]
     */
    public $orderBy;

    /**
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var startTime
     */
    public $startTime;
    protected $_name = [
        'applicationId' => 'applicationId',
        'applicationName' => 'applicationName',
        'maxResults' => 'maxResults',
        'minDuration' => 'minDuration',
        'nextToken' => 'nextToken',
        'orderBy' => 'orderBy',
        'resourceQueueId' => 'resourceQueueId',
        'sort' => 'sort',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->orderBy)) {
            Model::validateArray($this->orderBy);
        }
        if (null !== $this->startTime) {
            $this->startTime->validate();
        }
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

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->minDuration) {
            $res['minDuration'] = $this->minDuration;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            if (\is_array($this->orderBy)) {
                $res['orderBy'] = [];
                $n1 = 0;
                foreach ($this->orderBy as $item1) {
                    $res['orderBy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = null !== $this->startTime ? $this->startTime->toArray($noStream) : $this->startTime;
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
            if (!empty($map['orderBy'])) {
                $model->orderBy = [];
                $n1 = 0;
                foreach ($map['orderBy'] as $item1) {
                    $model->orderBy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = startTime::fromMap($map['startTime']);
        }

        return $model;
    }
}
