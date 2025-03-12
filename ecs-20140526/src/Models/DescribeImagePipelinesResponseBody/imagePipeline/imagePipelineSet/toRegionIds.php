<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->toRegionId) {
            $res['ToRegionId'] = $this->toRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return toRegionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ToRegionId'])) {
            if (!empty($map['ToRegionId'])) {
                $model->toRegionId = $map['ToRegionId'];
            }
        }

        return $model;
    }
}
