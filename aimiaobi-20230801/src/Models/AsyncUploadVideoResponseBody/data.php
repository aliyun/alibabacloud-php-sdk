<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoResponseBody\data\videoInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;

    /**
     * @var videoInfos[]
     */
    public $videoInfos;
    protected $_name = [
        'taskId' => 'TaskId',
        'videoInfos' => 'VideoInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->videoInfos) {
            $res['VideoInfos'] = [];
            if (null !== $this->videoInfos && \is_array($this->videoInfos)) {
                $n = 0;
                foreach ($this->videoInfos as $item) {
                    $res['VideoInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VideoInfos'])) {
            if (!empty($map['VideoInfos'])) {
                $model->videoInfos = [];
                $n = 0;
                foreach ($map['VideoInfos'] as $item) {
                    $model->videoInfos[$n++] = null !== $item ? videoInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
