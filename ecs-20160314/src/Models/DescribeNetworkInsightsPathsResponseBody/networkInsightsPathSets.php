<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsPathsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsPathsResponseBody\networkInsightsPathSets\networkInsightsPathSet;
use AlibabaCloud\Tea\Model;

class networkInsightsPathSets extends Model
{
    /**
     * @var networkInsightsPathSet[]
     */
    public $networkInsightsPathSet;
    protected $_name = [
        'networkInsightsPathSet' => 'NetworkInsightsPathSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInsightsPathSet) {
            $res['NetworkInsightsPathSet'] = [];
            if (null !== $this->networkInsightsPathSet && \is_array($this->networkInsightsPathSet)) {
                $n = 0;
                foreach ($this->networkInsightsPathSet as $item) {
                    $res['NetworkInsightsPathSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInsightsPathSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInsightsPathSet'])) {
            if (!empty($map['NetworkInsightsPathSet'])) {
                $model->networkInsightsPathSet = [];
                $n                             = 0;
                foreach ($map['NetworkInsightsPathSet'] as $item) {
                    $model->networkInsightsPathSet[$n++] = null !== $item ? networkInsightsPathSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
