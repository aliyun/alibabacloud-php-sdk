<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoResponseBody\data\videoInfos;

class data extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->videoInfos)) {
            Model::validateArray($this->videoInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->videoInfos) {
            if (\is_array($this->videoInfos)) {
                $res['VideoInfos'] = [];
                $n1 = 0;
                foreach ($this->videoInfos as $item1) {
                    $res['VideoInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['VideoInfos'])) {
            if (!empty($map['VideoInfos'])) {
                $model->videoInfos = [];
                $n1 = 0;
                foreach ($map['VideoInfos'] as $item1) {
                    $model->videoInfos[$n1] = videoInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
