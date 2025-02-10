<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute;

class CreateNetworkAclResponseBody extends Model
{
    /**
     * @var networkAclAttribute
     */
    public $networkAclAttribute;
    /**
     * @var string
     */
    public $networkAclId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkAclAttribute' => 'NetworkAclAttribute',
        'networkAclId'        => 'NetworkAclId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->networkAclAttribute) {
            $this->networkAclAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAclAttribute) {
            $res['NetworkAclAttribute'] = null !== $this->networkAclAttribute ? $this->networkAclAttribute->toArray($noStream) : $this->networkAclAttribute;
        }

        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
