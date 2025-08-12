<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEventStruct extends Model
{
    /**
     * @var int
     */
    public $autoRecoverTime;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $dimension;

    /**
     * @var string[]
     */
    public $groupBy;

    /**
     * @var string
     */
    public $incidentEventId;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var int
     */
    public $recoverTime;

    /**
     * @var string[]
     */
    public $resource;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'autoRecoverTime' => 'autoRecoverTime',
        'content' => 'content',
        'count' => 'count',
        'dimension' => 'dimension',
        'groupBy' => 'groupBy',
        'incidentEventId' => 'incidentEventId',
        'incidentId' => 'incidentId',
        'lastTime' => 'lastTime',
        'recoverTime' => 'recoverTime',
        'resource' => 'resource',
        'status' => 'status',
        'time' => 'time',
        'title' => 'title',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->dimension)) {
            Model::validateArray($this->dimension);
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecoverTime) {
            $res['autoRecoverTime'] = $this->autoRecoverTime;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->dimension) {
            if (\is_array($this->dimension)) {
                $res['dimension'] = [];
                foreach ($this->dimension as $key1 => $value1) {
                    $res['dimension'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                foreach ($this->groupBy as $key1 => $value1) {
                    $res['groupBy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->incidentEventId) {
            $res['incidentEventId'] = $this->incidentEventId;
        }

        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        if (null !== $this->lastTime) {
            $res['lastTime'] = $this->lastTime;
        }

        if (null !== $this->recoverTime) {
            $res['recoverTime'] = $this->recoverTime;
        }

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['resource'] = [];
                foreach ($this->resource as $key1 => $value1) {
                    $res['resource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['autoRecoverTime'])) {
            $model->autoRecoverTime = $map['autoRecoverTime'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['dimension'])) {
            if (!empty($map['dimension'])) {
                $model->dimension = [];
                foreach ($map['dimension'] as $key1 => $value1) {
                    $model->dimension[$key1] = $value1;
                }
            }
        }

        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                foreach ($map['groupBy'] as $key1 => $value1) {
                    $model->groupBy[$key1] = $value1;
                }
            }
        }

        if (isset($map['incidentEventId'])) {
            $model->incidentEventId = $map['incidentEventId'];
        }

        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        if (isset($map['lastTime'])) {
            $model->lastTime = $map['lastTime'];
        }

        if (isset($map['recoverTime'])) {
            $model->recoverTime = $map['recoverTime'];
        }

        if (isset($map['resource'])) {
            if (!empty($map['resource'])) {
                $model->resource = [];
                foreach ($map['resource'] as $key1 => $value1) {
                    $model->resource[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
