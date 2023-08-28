<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description 353490
     *
     * @example ""
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description ### Sample responses
     *
     **Sample success responses**
     *
     * }
     *
     **Sample error responses**
     *
     * }
     * @example vsw-bp11ldcf59q2nbwkqgj6z
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Queries instances.
     *
     * @example vpc-wz9axk41d9vffoc79x0oe
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'endpoint'  => 'endpoint',
        'vSwitchId' => 'vSwitchId',
        'vpcId'     => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
