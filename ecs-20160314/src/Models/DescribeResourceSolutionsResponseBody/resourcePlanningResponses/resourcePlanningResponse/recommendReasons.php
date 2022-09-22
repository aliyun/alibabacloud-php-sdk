<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsResponseBody\resourcePlanningResponses\resourcePlanningResponse;

use AlibabaCloud\Tea\Model;

class recommendReasons extends Model
{
    /**
     * @var string[]
     */
    public $recommendReason;
    protected $_name = [
        'recommendReason' => 'RecommendReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendReason) {
            $res['RecommendReason'] = $this->recommendReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendReasons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendReason'])) {
            if (!empty($map['RecommendReason'])) {
                $model->recommendReason = $map['RecommendReason'];
            }
        }

        return $model;
    }
}
