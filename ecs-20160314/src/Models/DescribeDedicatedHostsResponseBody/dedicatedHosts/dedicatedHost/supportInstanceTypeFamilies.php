<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class supportInstanceTypeFamilies extends Model
{
    /**
     * @var string[]
     */
    public $supportInstanceTypeFamily;
    protected $_name = [
        'supportInstanceTypeFamily' => 'SupportInstanceTypeFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportInstanceTypeFamily) {
            $res['SupportInstanceTypeFamily'] = $this->supportInstanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportInstanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportInstanceTypeFamily'])) {
            if (!empty($map['SupportInstanceTypeFamily'])) {
                $model->supportInstanceTypeFamily = $map['SupportInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
