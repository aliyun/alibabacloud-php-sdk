<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute;
use AlibabaCloud\Tea\Model;

class CreateNetworkAclResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var networkAclAttribute
     */
    public $networkAclAttribute;
    protected $_name = [
        'networkAclId'        => 'NetworkAclId',
        'requestId'           => 'RequestId',
        'networkAclAttribute' => 'NetworkAclAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->networkAclAttribute) {
            $res['NetworkAclAttribute'] = null !== $this->networkAclAttribute ? $this->networkAclAttribute->toMap() : null;
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
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NetworkAclAttribute'])) {
            $model->networkAclAttribute = networkAclAttribute::fromMap($map['NetworkAclAttribute']);
        }

        return $model;
    }
}
