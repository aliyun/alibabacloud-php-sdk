<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute;
use AlibabaCloud\Tea\Model;

class DescribeNetworkAclAttributesResponseBody extends Model
{
    /**
     * @var networkAclAttribute
     */
    public $networkAclAttribute;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkAclAttribute' => 'NetworkAclAttribute',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclAttribute) {
            $res['NetworkAclAttribute'] = null !== $this->networkAclAttribute ? $this->networkAclAttribute->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkAclAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclAttribute'])) {
            $model->networkAclAttribute = networkAclAttribute::fromMap($map['NetworkAclAttribute']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
