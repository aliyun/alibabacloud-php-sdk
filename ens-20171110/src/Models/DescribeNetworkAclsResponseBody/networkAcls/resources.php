<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The ID of the edge node.
     *
     * @example cn-fuzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the associated resource.
     *
     * @example n-****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the associated resource.
     *
     * @example Network
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The association status of the resource. Valid values:
     *
     *   **BINDED**: The resource is associated with the network ACL.
     *   **BINDING**: The resource is being associated with the network ACL.
     *   **UNBINDING**: The resource is being disassociated from the network ACL.
     *
     * @example BINDING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ensRegionId'  => 'EnsRegionId',
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
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
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
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
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
