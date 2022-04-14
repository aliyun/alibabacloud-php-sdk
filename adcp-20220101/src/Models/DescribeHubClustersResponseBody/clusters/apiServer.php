<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class apiServer extends Model
{
    /**
     * @var bool
     */
    public $enabledPublic;

    /**
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'enabledPublic'  => 'EnabledPublic',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['EnabledPublic'])) {
            $model->enabledPublic = $map['EnabledPublic'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
