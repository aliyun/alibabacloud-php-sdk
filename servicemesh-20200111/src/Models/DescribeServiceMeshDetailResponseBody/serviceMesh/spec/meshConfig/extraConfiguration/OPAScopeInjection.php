<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;

class OPAScopeInjection extends Model
{
    /**
     * @var bool
     */
    public $OPAScopeInjected;
    protected $_name = [
        'OPAScopeInjected' => 'OPAScopeInjected',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OPAScopeInjected) {
            $res['OPAScopeInjected'] = $this->OPAScopeInjected;
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
        if (isset($map['OPAScopeInjected'])) {
            $model->OPAScopeInjected = $map['OPAScopeInjected'];
        }

        return $model;
    }
}
