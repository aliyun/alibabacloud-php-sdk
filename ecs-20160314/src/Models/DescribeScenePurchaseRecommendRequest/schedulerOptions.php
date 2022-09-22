<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendRequest;

use AlibabaCloud\Tea\Model;

class schedulerOptions extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostClusterId;
    protected $_name = [
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }

        return $model;
    }
}
