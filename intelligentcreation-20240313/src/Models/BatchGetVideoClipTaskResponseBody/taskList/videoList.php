<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody\taskList;

use AlibabaCloud\Dara\Model;

class videoList extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $videoDownloadUrl;

    /**
     * @var string
     */
    public $videoName;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'beginTime' => 'beginTime',
        'description' => 'description',
        'endTime' => 'endTime',
        'errorMsg' => 'errorMsg',
        'title' => 'title',
        'videoDownloadUrl' => 'videoDownloadUrl',
        'videoName' => 'videoName',
        'videoUrl' => 'videoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->videoDownloadUrl) {
            $res['videoDownloadUrl'] = $this->videoDownloadUrl;
        }

        if (null !== $this->videoName) {
            $res['videoName'] = $this->videoName;
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
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['videoDownloadUrl'])) {
            $model->videoDownloadUrl = $map['videoDownloadUrl'];
        }

        if (isset($map['videoName'])) {
            $model->videoName = $map['videoName'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
