<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponse\resourceGroup;
use AlibabaCloud\Tea\Model;

class DeleteResourceGroupResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceGroup
     */
    public $resourceGroup;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceGroup' => 'ResourceGroup',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = null !== $this->resourceGroup ? $this->resourceGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = resourceGroup::fromMap($map['ResourceGroup']);
        }

        return $model;
    }
}
