<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;

class toRegionIds extends Model
{
    /**
     * @var string[]
     */
    public $toRegionId;
    protected $_name = [
        'toRegionId' => 'ToRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->toRegionId)) {
            Model::validateArray($this->toRegionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->toRegionId) {
            if (\is_array($this->toRegionId)) {
                $res['ToRegionId'] = [];
                $n1 = 0;
                foreach ($this->toRegionId as $item1) {
                    $res['ToRegionId'][$n1++] = $item1;
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
        if (isset($map['ToRegionId'])) {
            if (!empty($map['ToRegionId'])) {
                $model->toRegionId = [];
                $n1 = 0;
                foreach ($map['ToRegionId'] as $item1) {
                    $model->toRegionId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
