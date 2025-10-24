<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList\mediaWorkflowExecution;

class mediaWorkflowExecutionList extends Model
{
    /**
     * @var mediaWorkflowExecution[]
     */
    public $mediaWorkflowExecution;
    protected $_name = [
        'mediaWorkflowExecution' => 'MediaWorkflowExecution',
    ];

    public function validate()
    {
        if (\is_array($this->mediaWorkflowExecution)) {
            Model::validateArray($this->mediaWorkflowExecution);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaWorkflowExecution) {
            if (\is_array($this->mediaWorkflowExecution)) {
                $res['MediaWorkflowExecution'] = [];
                $n1 = 0;
                foreach ($this->mediaWorkflowExecution as $item1) {
                    $res['MediaWorkflowExecution'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaWorkflowExecution'])) {
            if (!empty($map['MediaWorkflowExecution'])) {
                $model->mediaWorkflowExecution = [];
                $n1 = 0;
                foreach ($map['MediaWorkflowExecution'] as $item1) {
                    $model->mediaWorkflowExecution[$n1] = mediaWorkflowExecution::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
