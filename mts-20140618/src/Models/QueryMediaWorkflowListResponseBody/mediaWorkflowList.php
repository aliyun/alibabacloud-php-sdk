<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody\mediaWorkflowList\mediaWorkflow;

class mediaWorkflowList extends Model
{
    /**
     * @var mediaWorkflow[]
     */
    public $mediaWorkflow;
    protected $_name = [
        'mediaWorkflow' => 'MediaWorkflow',
    ];

    public function validate()
    {
        if (\is_array($this->mediaWorkflow)) {
            Model::validateArray($this->mediaWorkflow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaWorkflow) {
            if (\is_array($this->mediaWorkflow)) {
                $res['MediaWorkflow'] = [];
                $n1 = 0;
                foreach ($this->mediaWorkflow as $item1) {
                    $res['MediaWorkflow'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaWorkflow'])) {
            if (!empty($map['MediaWorkflow'])) {
                $model->mediaWorkflow = [];
                $n1 = 0;
                foreach ($map['MediaWorkflow'] as $item1) {
                    $model->mediaWorkflow[$n1++] = mediaWorkflow::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
