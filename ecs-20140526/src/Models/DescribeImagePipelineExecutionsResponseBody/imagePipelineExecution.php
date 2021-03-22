<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody\imagePipelineExecution\imagePipelineExecutionSet;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagePipelineExecutionSet) {
            $res['ImagePipelineExecutionSet'] = [];
            if (null !== $this->imagePipelineExecutionSet && \is_array($this->imagePipelineExecutionSet)) {
                $n = 0;
                foreach ($this->imagePipelineExecutionSet as $item) {
                    $res['ImagePipelineExecutionSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imagePipelineExecution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagePipelineExecutionSet'])) {
            if (!empty($map['ImagePipelineExecutionSet'])) {
                $model->imagePipelineExecutionSet = [];
                $n                                = 0;
                foreach ($map['ImagePipelineExecutionSet'] as $item) {
                    $model->imagePipelineExecutionSet[$n++] = null !== $item ? imagePipelineExecutionSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
