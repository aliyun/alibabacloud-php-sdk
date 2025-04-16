<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody\imagePipelineExecution\imagePipelineExecutionSet;

class imagePipelineExecution extends Model
{
    /**
     * @var imagePipelineExecutionSet[]
     */
    public $imagePipelineExecutionSet;
    protected $_name = [
        'imagePipelineExecutionSet' => 'ImagePipelineExecutionSet',
    ];

    public function validate()
    {
        if (\is_array($this->imagePipelineExecutionSet)) {
            Model::validateArray($this->imagePipelineExecutionSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imagePipelineExecutionSet) {
            if (\is_array($this->imagePipelineExecutionSet)) {
                $res['ImagePipelineExecutionSet'] = [];
                $n1 = 0;
                foreach ($this->imagePipelineExecutionSet as $item1) {
                    $res['ImagePipelineExecutionSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImagePipelineExecutionSet'])) {
            if (!empty($map['ImagePipelineExecutionSet'])) {
                $model->imagePipelineExecutionSet = [];
                $n1 = 0;
                foreach ($map['ImagePipelineExecutionSet'] as $item1) {
                    $model->imagePipelineExecutionSet[$n1++] = imagePipelineExecutionSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
