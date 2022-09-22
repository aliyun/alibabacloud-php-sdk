<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent;
use AlibabaCloud\Tea\Model;

class networkInsightsAnalysisComponents extends Model
{
    /**
     * @var networkInsightsAnalysisComponent[]
     */
    public $networkInsightsAnalysisComponent;
    protected $_name = [
        'networkInsightsAnalysisComponent' => 'NetworkInsightsAnalysisComponent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInsightsAnalysisComponent) {
            $res['NetworkInsightsAnalysisComponent'] = [];
            if (null !== $this->networkInsightsAnalysisComponent && \is_array($this->networkInsightsAnalysisComponent)) {
                $n = 0;
                foreach ($this->networkInsightsAnalysisComponent as $item) {
                    $res['NetworkInsightsAnalysisComponent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInsightsAnalysisComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInsightsAnalysisComponent'])) {
            if (!empty($map['NetworkInsightsAnalysisComponent'])) {
                $model->networkInsightsAnalysisComponent = [];
                $n                                       = 0;
                foreach ($map['NetworkInsightsAnalysisComponent'] as $item) {
                    $model->networkInsightsAnalysisComponent[$n++] = null !== $item ? networkInsightsAnalysisComponent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
