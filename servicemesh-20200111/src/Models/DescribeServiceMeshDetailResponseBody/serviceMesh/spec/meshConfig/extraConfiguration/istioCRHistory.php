<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class istioCRHistory extends Model
{
    /**
     * @description Indicates whether the rollback feature for Istio resources is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $enableHistory;
    protected $_name = [
        'enableHistory' => 'EnableHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableHistory) {
            $res['EnableHistory'] = $this->enableHistory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return istioCRHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableHistory'])) {
            $model->enableHistory = $map['EnableHistory'];
        }

        return $model;
    }
}
