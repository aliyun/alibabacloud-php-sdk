<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetMediaLiveInputSecurityGroupRequest extends Model
{
    /**
     * @description The ID of the security group.
     *
     * This parameter is required.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaLiveInputSecurityGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
