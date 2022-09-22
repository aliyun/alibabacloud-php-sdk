<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class supportedCustomInstanceTypeFamilies extends Model
{
    /**
     * @var string[]
     */
    public $supportedCustomInstanceTypeFamily;
    protected $_name = [
        'supportedCustomInstanceTypeFamily' => 'SupportedCustomInstanceTypeFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedCustomInstanceTypeFamily) {
            $res['SupportedCustomInstanceTypeFamily'] = $this->supportedCustomInstanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCustomInstanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedCustomInstanceTypeFamily'])) {
            if (!empty($map['SupportedCustomInstanceTypeFamily'])) {
                $model->supportedCustomInstanceTypeFamily = $map['SupportedCustomInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
