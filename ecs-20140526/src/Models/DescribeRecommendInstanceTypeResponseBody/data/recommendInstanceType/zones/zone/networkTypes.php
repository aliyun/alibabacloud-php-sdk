<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones\zone;

use AlibabaCloud\Tea\Model;

class networkTypes extends Model
{
    /**
     * @var string[]
     */
    public $networkType;
    protected $_name = [
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkType'])) {
            if (!empty($map['NetworkType'])) {
                $model->networkType = $map['NetworkType'];
            }
        }

        return $model;
    }
}
