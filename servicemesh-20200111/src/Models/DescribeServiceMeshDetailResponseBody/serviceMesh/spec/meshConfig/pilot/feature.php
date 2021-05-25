<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot;

use AlibabaCloud\Tea\Model;

class feature extends Model
{
    /**
     * @var bool
     */
    public $filterGatewayClusterConfig;

    /**
     * @var bool
     */
    public $enableSDSServer;
    protected $_name = [
        'filterGatewayClusterConfig' => 'FilterGatewayClusterConfig',
        'enableSDSServer'            => 'EnableSDSServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }
        if (null !== $this->enableSDSServer) {
            $res['EnableSDSServer'] = $this->enableSDSServer;
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
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }
        if (isset($map['EnableSDSServer'])) {
            $model->enableSDSServer = $map['EnableSDSServer'];
        }

        return $model;
    }
}
