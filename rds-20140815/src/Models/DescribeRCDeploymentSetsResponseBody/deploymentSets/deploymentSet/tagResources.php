<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet;

use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\tagResources\tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagResources) {
            $res['TagResources'] = [];
            if (null !== $this->tagResources && \is_array($this->tagResources)) {
                $n = 0;
                foreach ($this->tagResources as $item) {
                    $res['TagResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n                   = 0;
                foreach ($map['TagResources'] as $item) {
                    $model->tagResources[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCDeploymentSetsResponseBody\deploymentSets\deploymentSet\tagResources\tagResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
