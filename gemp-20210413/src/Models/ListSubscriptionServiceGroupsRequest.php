<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListSubscriptionServiceGroupsRequest extends Model
{
    /**
     * @description 服务列表
     *
     * @var int[]
     */
    public $serviceIds;

    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'serviceIds'  => 'serviceIds',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceIds) {
            $res['serviceIds'] = $this->serviceIds;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionServiceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceIds'])) {
            if (!empty($map['serviceIds'])) {
                $model->serviceIds = $map['serviceIds'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
