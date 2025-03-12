<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupReferencesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the references to the specified security groups.
     *
     * @var securityGroupReferences
     */
    public $securityGroupReferences;
    protected $_name = [
        'requestId'               => 'RequestId',
        'securityGroupReferences' => 'SecurityGroupReferences',
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
        if (null !== $this->securityGroupReferences) {
            $res['SecurityGroupReferences'] = null !== $this->securityGroupReferences ? $this->securityGroupReferences->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupReferencesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupReferences'])) {
            $model->securityGroupReferences = securityGroupReferences::fromMap($map['SecurityGroupReferences']);
        }

        return $model;
    }
}
