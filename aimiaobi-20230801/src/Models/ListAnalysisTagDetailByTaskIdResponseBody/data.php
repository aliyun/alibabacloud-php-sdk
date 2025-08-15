<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdResponseBody\data\contentTags;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var contentTags[]
     */
    public $contentTags;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $tagTaskType;

    /**
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

    public function validate()
    {
        if (\is_array($this->contentTags)) {
            Model::validateArray($this->contentTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentTags) {
            if (\is_array($this->contentTags)) {
                $res['ContentTags'] = [];
                $n1 = 0;
                foreach ($this->contentTags as $item1) {
                    $res['ContentTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentTags'])) {
            if (!empty($map['ContentTags'])) {
                $model->contentTags = [];
                $n1 = 0;
                foreach ($map['ContentTags'] as $item1) {
                    $model->contentTags[$n1] = contentTags::fromMap($item1);
                    ++$n1;
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
