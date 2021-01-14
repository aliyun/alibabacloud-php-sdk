<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class pilot extends Model
{
    /**
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $http10Enabled;
    protected $_name = [
        'traceSampling' => 'TraceSampling',
        'http10Enabled' => 'Http10Enabled',
    ];

    public function validate()
    {
        Model::validateRequired('traceSampling', $this->traceSampling, true);
        Model::validateRequired('http10Enabled', $this->http10Enabled, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pilot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
        }

        return $model;
    }
}
