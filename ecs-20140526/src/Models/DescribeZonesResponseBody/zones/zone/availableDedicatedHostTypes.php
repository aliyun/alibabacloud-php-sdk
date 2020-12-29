<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Tea\Model;

class availableDedicatedHostTypes extends Model
{
    /**
     * @var string[]
     */
    public $dedicatedHostType;
    protected $_name = [
        'dedicatedHostType' => 'DedicatedHostType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableDedicatedHostTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostType'])) {
            if (!empty($map['DedicatedHostType'])) {
                $model->dedicatedHostType = $map['DedicatedHostType'];
            }
        }

        return $model;
    }
}
