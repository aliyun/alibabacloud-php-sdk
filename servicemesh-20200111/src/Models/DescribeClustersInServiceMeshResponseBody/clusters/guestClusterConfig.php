<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody\clusters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody\clusters\guestClusterConfig\SMC;

class guestClusterConfig extends Model
{
    /**
     * @var SMC
     */
    public $SMC;
    protected $_name = [
        'SMC' => 'SMC',
    ];

    public function validate()
    {
        if (null !== $this->SMC) {
            $this->SMC->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SMC) {
            $res['SMC'] = null !== $this->SMC ? $this->SMC->toArray($noStream) : $this->SMC;
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
        if (isset($map['SMC'])) {
            $model->SMC = SMC::fromMap($map['SMC']);
        }

        return $model;
    }
}
