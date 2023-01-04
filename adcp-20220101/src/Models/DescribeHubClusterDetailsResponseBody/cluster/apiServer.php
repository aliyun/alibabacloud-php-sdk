<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class apiServer extends Model
{
    /**
     * @description The ID of the elastic IP address (EIP).
     *
     * @example eip-abc
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description Indicates whether a public endpoint is used to expose the API server. Valid values: - true: a public endpoint is used to expose the API server. - false: no public endpoint is used to expose the API server.
     *
     * @example true
     *
     * @var bool
     */
    public $enabledPublic;

    /**
     * @description The ID of the Server Load Balancer (SLB) instance.
     *
     * @example lb-hp3ioqbfeq37h13rwe***
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'apiServerEipId' => 'ApiServerEipId',
        'enabledPublic'  => 'EnabledPublic',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEipId) {
            $res['ApiServerEipId'] = $this->apiServerEipId;
        }
        if (null !== $this->enabledPublic) {
            $res['EnabledPublic'] = $this->enabledPublic;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerEipId'])) {
            $model->apiServerEipId = $map['ApiServerEipId'];
        }
        if (isset($map['EnabledPublic'])) {
            $model->enabledPublic = $map['EnabledPublic'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
