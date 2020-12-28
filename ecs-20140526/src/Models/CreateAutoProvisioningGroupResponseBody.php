<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $autoProvisioningGroupId;
    protected $_name = [
        'requestId'               => 'RequestId',
        'autoProvisioningGroupId' => 'AutoProvisioningGroupId',
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
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoProvisioningGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }

        return $model;
    }
}
