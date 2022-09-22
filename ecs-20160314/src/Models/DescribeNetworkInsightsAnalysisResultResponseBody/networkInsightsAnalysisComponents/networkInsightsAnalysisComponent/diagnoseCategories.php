<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory;
use AlibabaCloud\Tea\Model;

class diagnoseCategories extends Model
{
    /**
     * @var diagnoseCategory[]
     */
    public $diagnoseCategory;
    protected $_name = [
        'diagnoseCategory' => 'DiagnoseCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseCategory) {
            $res['DiagnoseCategory'] = [];
            if (null !== $this->diagnoseCategory && \is_array($this->diagnoseCategory)) {
                $n = 0;
                foreach ($this->diagnoseCategory as $item) {
                    $res['DiagnoseCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseCategory'])) {
            if (!empty($map['DiagnoseCategory'])) {
                $model->diagnoseCategory = [];
                $n                       = 0;
                foreach ($map['DiagnoseCategory'] as $item) {
                    $model->diagnoseCategory[$n++] = null !== $item ? diagnoseCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
