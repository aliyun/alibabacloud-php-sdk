<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetServiceGroupSpecialPersonSchedulingRequest extends Model
{
    /**
     * @description 用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'userId'         => 'userId',
        'serviceGroupId' => 'serviceGroupId',
        'clientToken'    => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceGroupSpecialPersonSchedulingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
