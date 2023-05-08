<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration;

use AlibabaCloud\Tea\Model;

class egressResources extends Model
{
    /**
     * @description The resources that are available to the egress gateway.
     *
     * @example {"cpu":"200m", "memory": "512Mi"}
     *
     * @var mixed[]
     */
    public $limits;

    /**
     * @description The resources that are requested by the egress gateway.
     *
     * @example {"cpu":"100m", "memory": "256Mi"}
     *
     * @var mixed[]
     */
    public $requests;
    protected $_name = [
        'limits'   => 'Limits',
        'requests' => 'Requests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limits) {
            $res['Limits'] = $this->limits;
        }
        if (null !== $this->requests) {
            $res['Requests'] = $this->requests;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limits'])) {
            $model->limits = $map['Limits'];
        }
        if (isset($map['Requests'])) {
            $model->requests = $map['Requests'];
        }

        return $model;
    }
}
