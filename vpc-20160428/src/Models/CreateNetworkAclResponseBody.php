<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute;
use AlibabaCloud\Tea\Model;

class CreateNetworkAclResponseBody extends Model
{
    /**
     * @description The attributes of the network ACL.
     *
     * @var networkAclAttribute
     */
    public $networkAclAttribute;

    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-a2do9e413e0spzasx****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkAclAttribute' => 'NetworkAclAttribute',
        'networkAclId' => 'NetworkAclId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclAttribute) {
            $res['NetworkAclAttribute'] = null !== $this->networkAclAttribute ? $this->networkAclAttribute->toMap() : null;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkAclResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclAttribute'])) {
            $model->networkAclAttribute = networkAclAttribute::fromMap($map['NetworkAclAttribute']);
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
