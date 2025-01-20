<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskResponseBody;

use AlibabaCloud\Dara\Model;

class resultList extends Model
{
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $videoDownloadUrl;
    /**
     * @var int
     */
    public $videoDuration;
    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'errorMsg'         => 'errorMsg',
        'status'           => 'status',
        'taskId'           => 'taskId',
        'videoDownloadUrl' => 'videoDownloadUrl',
        'videoDuration'    => 'videoDuration',
        'videoUrl'         => 'videoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->videoDownloadUrl) {
            $res['videoDownloadUrl'] = $this->videoDownloadUrl;
        }

        if (null !== $this->videoDuration) {
            $res['videoDuration'] = $this->videoDuration;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
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
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['videoDownloadUrl'])) {
            $model->videoDownloadUrl = $map['videoDownloadUrl'];
        }

        if (isset($map['videoDuration'])) {
            $model->videoDuration = $map['videoDuration'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
