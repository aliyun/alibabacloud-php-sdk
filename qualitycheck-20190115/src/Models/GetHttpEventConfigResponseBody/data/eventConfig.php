<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetHttpEventConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class eventConfig extends Model
{
    /**
     * @var bool
     */
    public $complaintHandledEvent;

    /**
     * @var bool
     */
    public $fileReviewedEvent;

    /**
     * @var bool
     */
    public $syncTaskCompleteEvent;

    /**
     * @var bool
     */
    public $taskCompleteEvent;
    protected $_name = [
        'complaintHandledEvent' => 'ComplaintHandledEvent',
        'fileReviewedEvent' => 'FileReviewedEvent',
        'syncTaskCompleteEvent' => 'SyncTaskCompleteEvent',
        'taskCompleteEvent' => 'TaskCompleteEvent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complaintHandledEvent) {
            $res['ComplaintHandledEvent'] = $this->complaintHandledEvent;
        }

        if (null !== $this->fileReviewedEvent) {
            $res['FileReviewedEvent'] = $this->fileReviewedEvent;
        }

        if (null !== $this->syncTaskCompleteEvent) {
            $res['SyncTaskCompleteEvent'] = $this->syncTaskCompleteEvent;
        }

        if (null !== $this->taskCompleteEvent) {
            $res['TaskCompleteEvent'] = $this->taskCompleteEvent;
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
        if (isset($map['ComplaintHandledEvent'])) {
            $model->complaintHandledEvent = $map['ComplaintHandledEvent'];
        }

        if (isset($map['FileReviewedEvent'])) {
            $model->fileReviewedEvent = $map['FileReviewedEvent'];
        }

        if (isset($map['SyncTaskCompleteEvent'])) {
            $model->syncTaskCompleteEvent = $map['SyncTaskCompleteEvent'];
        }

        if (isset($map['TaskCompleteEvent'])) {
            $model->taskCompleteEvent = $map['TaskCompleteEvent'];
        }

        return $model;
    }
}
