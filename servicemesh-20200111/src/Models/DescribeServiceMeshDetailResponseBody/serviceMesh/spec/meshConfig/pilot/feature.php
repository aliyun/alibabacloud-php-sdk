<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot;

use AlibabaCloud\Tea\Model;

class feature extends Model
{
    /**
     * @description Indicates whether Secret Discovery Service (SDS) is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $enableSDSServer;

    /**
     * @description Indicates whether gateway configuration filtering is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $filterGatewayClusterConfig;
    protected $_name = [
        'enableSDSServer'            => 'EnableSDSServer',
        'filterGatewayClusterConfig' => 'FilterGatewayClusterConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSDSServer) {
            $res['EnableSDSServer'] = $this->enableSDSServer;
        }
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSDSServer'])) {
            $model->enableSDSServer = $map['EnableSDSServer'];
        }
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }

        return $model;
    }
}
