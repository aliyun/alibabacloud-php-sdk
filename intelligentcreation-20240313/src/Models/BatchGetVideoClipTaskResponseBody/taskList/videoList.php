<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody\taskList;

use AlibabaCloud\Tea\Model;

class videoList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 11110
     *
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
     * @example https://e-ai.oss-cn-guangzhou.aliyuncs.com/video/jlkasdl.mp4
     *
     * @var string
     */
    public $videoDownloadUrl;

    /**
     * @var string
     */
    public $videoName;

    /**
     * @example https://e-ai.oss-cn-guangzhou.aliyuncs.com/video/jlkasdl.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'beginTime'        => 'beginTime',
        'description'      => 'description',
        'endTime'          => 'endTime',
        'errorMsg'         => 'errorMsg',
        'title'            => 'title',
        'videoDownloadUrl' => 'videoDownloadUrl',
        'videoName'        => 'videoName',
        'videoUrl'         => 'videoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return videoList
     */
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
