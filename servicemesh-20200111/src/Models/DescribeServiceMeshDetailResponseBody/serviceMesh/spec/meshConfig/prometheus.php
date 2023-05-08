<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class prometheus extends Model
{
    /**
     * @description The endpoint of Prometheus monitoring. If you use a custom Prometheus instance, this parameter is populated by the system.
     *
     * @example http://prometheus:9090
     *
     * @var string
     */
    public $externalUrl;

    /**
     * @description Indicates whether a custom Prometheus instance is used. Valid values:
     *
     *   `true`: A custom Prometheus instance is used.
     *   `false`: No custom Prometheus instance is used.
     *
     * @example false
     *
     * @var bool
     */
    public $useExternal;
    protected $_name = [
        'externalUrl' => 'ExternalUrl',
        'useExternal' => 'UseExternal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
        }
        if (null !== $this->useExternal) {
            $res['UseExternal'] = $this->useExternal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prometheus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalUrl'])) {
            $model->externalUrl = $map['ExternalUrl'];
        }
        if (isset($map['UseExternal'])) {
            $model->useExternal = $map['UseExternal'];
        }

        return $model;
    }
}
