<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisesResponseBody\networkInsightsAnalysisSets\networkInsightsAnalysisSet;
use AlibabaCloud\Tea\Model;

class networkInsightsAnalysisSets extends Model
{
    /**
     * @var networkInsightsAnalysisSet[]
     */
    public $networkInsightsAnalysisSet;
    protected $_name = [
        'networkInsightsAnalysisSet' => 'NetworkInsightsAnalysisSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInsightsAnalysisSet) {
            $res['NetworkInsightsAnalysisSet'] = [];
            if (null !== $this->networkInsightsAnalysisSet && \is_array($this->networkInsightsAnalysisSet)) {
                $n = 0;
                foreach ($this->networkInsightsAnalysisSet as $item) {
                    $res['NetworkInsightsAnalysisSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInsightsAnalysisSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInsightsAnalysisSet'])) {
            if (!empty($map['NetworkInsightsAnalysisSet'])) {
                $model->networkInsightsAnalysisSet = [];
                $n                                 = 0;
                foreach ($map['NetworkInsightsAnalysisSet'] as $item) {
                    $model->networkInsightsAnalysisSet[$n++] = null !== $item ? networkInsightsAnalysisSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
