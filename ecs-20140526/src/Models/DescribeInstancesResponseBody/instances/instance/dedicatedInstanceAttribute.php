<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class dedicatedInstanceAttribute extends Model
{
    /**
     * @var string
     */
    public $affinity;

    /**
     * @var string
     */
    public $tenancy;
    protected $_name = [
        'affinity' => 'Affinity',
        'tenancy'  => 'Tenancy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }

        return $model;
    }
}
