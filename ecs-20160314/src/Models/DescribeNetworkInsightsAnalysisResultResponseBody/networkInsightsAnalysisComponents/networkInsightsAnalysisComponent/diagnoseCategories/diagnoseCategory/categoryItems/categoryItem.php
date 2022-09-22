<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations;
use AlibabaCloud\Tea\Model;

class categoryItem extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var explanations
     */
    public $explanations;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $reachable;
    protected $_name = [
        'code'         => 'Code',
        'explanations' => 'Explanations',
        'itemName'     => 'ItemName',
        'reachable'    => 'Reachable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->explanations) {
            $res['Explanations'] = null !== $this->explanations ? $this->explanations->toMap() : null;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->reachable) {
            $res['Reachable'] = $this->reachable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Explanations'])) {
            $model->explanations = explanations::fromMap($map['Explanations']);
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Reachable'])) {
            $model->reachable = $map['Reachable'];
        }

        return $model;
    }
}
