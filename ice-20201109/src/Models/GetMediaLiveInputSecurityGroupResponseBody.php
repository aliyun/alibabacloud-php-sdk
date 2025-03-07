<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputSecurityGroupResponseBody\securityGroup;
use AlibabaCloud\Tea\Model;

class GetMediaLiveInputSecurityGroupResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ****63E8B7C7-4812-46AD-0FA56029AC86****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security group information.
     *
     * @var securityGroup
     */
    public $securityGroup;
    protected $_name = [
        'requestId'     => 'RequestId',
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = null !== $this->securityGroup ? $this->securityGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaLiveInputSecurityGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = securityGroup::fromMap($map['SecurityGroup']);
        }

        return $model;
    }
}
