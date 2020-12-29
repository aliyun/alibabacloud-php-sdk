<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class instanceTypeFamilies extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceTypeFamily;
    protected $_name = [
        'supportedInstanceTypeFamily' => 'supportedInstanceTypeFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceTypeFamily) {
            $res['supportedInstanceTypeFamily'] = $this->supportedInstanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedInstanceTypeFamily'])) {
            if (!empty($map['supportedInstanceTypeFamily'])) {
                $model->supportedInstanceTypeFamily = $map['supportedInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
