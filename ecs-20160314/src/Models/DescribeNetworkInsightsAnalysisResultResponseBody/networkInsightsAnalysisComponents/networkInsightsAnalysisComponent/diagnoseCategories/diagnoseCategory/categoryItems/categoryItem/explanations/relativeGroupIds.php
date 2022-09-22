<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations;

use AlibabaCloud\Tea\Model;

class relativeGroupIds extends Model
{
    /**
     * @var string[]
     */
    public $relativeGroupId;
    protected $_name = [
        'relativeGroupId' => 'RelativeGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relativeGroupId) {
            $res['RelativeGroupId'] = $this->relativeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relativeGroupIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelativeGroupId'])) {
            if (!empty($map['RelativeGroupId'])) {
                $model->relativeGroupId = $map['RelativeGroupId'];
            }
        }

        return $model;
    }
}
