<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSecurityGroupResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 760bad53276431c499e30dc36f6b26be
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1fg655nh68xyz9i***
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'securityGroupId' => 'SecurityGroupId',
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecurityGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
