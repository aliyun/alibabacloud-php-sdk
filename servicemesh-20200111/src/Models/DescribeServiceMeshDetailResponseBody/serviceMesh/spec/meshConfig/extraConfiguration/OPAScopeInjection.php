<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class OPAScopeInjection extends Model
{
    /**
     * @description Indicates whether the feature of controlling the OPA injection scope is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $OPAScopeInjected;
    protected $_name = [
        'OPAScopeInjected' => 'OPAScopeInjected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OPAScopeInjected) {
            $res['OPAScopeInjected'] = $this->OPAScopeInjected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OPAScopeInjection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OPAScopeInjected'])) {
            $model->OPAScopeInjected = $map['OPAScopeInjected'];
        }

        return $model;
    }
}
