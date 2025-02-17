<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
