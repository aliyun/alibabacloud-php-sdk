<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdResponseBody\data\contentTags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $content;

    /**
     * @var contentTags[]
     */
    public $contentTags;

    /**
     * @example 112
     *
     * @var int
     */
    public $id;

    /**
     * @example summaryAndOverview
     *
     * @var string
     */
    public $tagTaskType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'content' => 'Content',
        'contentTags' => 'ContentTags',
        'id' => 'Id',
        'tagTaskType' => 'TagTaskType',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentTags) {
            $res['ContentTags'] = [];
            if (null !== $this->contentTags && \is_array($this->contentTags)) {
                $n = 0;
                foreach ($this->contentTags as $item) {
                    $res['ContentTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tagTaskType) {
            $res['TagTaskType'] = $this->tagTaskType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentTags'])) {
            if (!empty($map['ContentTags'])) {
                $model->contentTags = [];
                $n = 0;
                foreach ($map['ContentTags'] as $item) {
                    $model->contentTags[$n++] = null !== $item ? contentTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TagTaskType'])) {
            $model->tagTaskType = $map['TagTaskType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
