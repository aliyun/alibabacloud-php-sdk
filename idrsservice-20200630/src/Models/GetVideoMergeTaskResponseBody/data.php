<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetVideoMergeTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2fr4fa55-2364-4d79-aeb4-c093ec4a4fd4
     *
     * @var string
     */
    public $clientTraceId;

    /**
     * @example 22
     *
     * @var float
     */
    public $duration;

    /**
     * @example 0.6
     *
     * @var int
     */
    public $height;

    /**
     * @example http://xxx.mp4
     *
     * @var string
     */
    public $mergeFileId;

    /**
     * @example 368cfa55-2364-4d79-aeb4-c0956c4a45cd
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 0.6
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'clientTraceId' => 'ClientTraceId',
        'duration'      => 'Duration',
        'height'        => 'Height',
        'mergeFileId'   => 'MergeFileId',
        'taskId'        => 'TaskId',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientTraceId) {
            $res['ClientTraceId'] = $this->clientTraceId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->mergeFileId) {
            $res['MergeFileId'] = $this->mergeFileId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientTraceId'])) {
            $model->clientTraceId = $map['ClientTraceId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MergeFileId'])) {
            $model->mergeFileId = $map['MergeFileId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
