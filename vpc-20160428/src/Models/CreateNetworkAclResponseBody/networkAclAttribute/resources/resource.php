<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The ID of the associated resource.
     *
     * @example vsw-bp1de348lntdwgthy****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of resource with which you want to associate the network ACL.
     *
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The association status of the resource. Valid values:
     *
     *   **BINDED**
     *   **BINDING**
     *   **UNBINDING**
     *
     * @example BINDED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
