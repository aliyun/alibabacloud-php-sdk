<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceGroupResponseBody\resourceGroup;

class GetResourceGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resourceGroup
     */
    public $resourceGroup;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceGroup' => 'ResourceGroup',
        'success'       => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->resourceGroup) {
            $this->resourceGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = null !== $this->resourceGroup ? $this->resourceGroup->toArray($noStream) : $this->resourceGroup;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = resourceGroup::fromMap($map['ResourceGroup']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
