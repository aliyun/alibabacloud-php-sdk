<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\UpdateSessionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $lastRunId;

    /**
     * @var string
     */
    public $lastRunStatus;

    /**
     * @var bool
     */
    public $pinned;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'lastRunId' => 'lastRunId',
        'lastRunStatus' => 'lastRunStatus',
        'pinned' => 'pinned',
        'sessionId' => 'sessionId',
        'status' => 'status',
        'title' => 'title',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->lastRunId) {
            $res['lastRunId'] = $this->lastRunId;
        }

        if (null !== $this->lastRunStatus) {
            $res['lastRunStatus'] = $this->lastRunStatus;
        }

        if (null !== $this->pinned) {
            $res['pinned'] = $this->pinned;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['lastRunId'])) {
            $model->lastRunId = $map['lastRunId'];
        }

        if (isset($map['lastRunStatus'])) {
            $model->lastRunStatus = $map['lastRunStatus'];
        }

        if (isset($map['pinned'])) {
            $model->pinned = $map['pinned'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
