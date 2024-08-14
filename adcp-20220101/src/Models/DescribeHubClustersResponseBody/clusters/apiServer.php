<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class apiServer extends Model
{
    /**
     * @description The elastic IP address (EIP) ID.
     *
     * @example eip-xxx
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description Indicates whether the public endpoint is enabled for the API server. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enabledPublic;

    /**
     * @description The ID of the Server Load Balancer (SLB) instance that is associated with the cluster.
     *
     * @example lb-bp1qyp4l6bscqxw69****
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
