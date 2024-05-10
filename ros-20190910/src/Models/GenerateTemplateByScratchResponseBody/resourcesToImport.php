<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplateByScratchResponseBody;

use AlibabaCloud\Tea\Model;

class resourcesToImport extends Model
{
    /**
     * @description The logical ID of the resource.
     *
     * @example ECSVPC_001
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The key-value mapping between strings. The value is a JSON string that identifies the resource that you want to import into a stack.\\
     * A key is an identifier for a resource, and a value is an assignment of data to the key. For example, VpcId is a key that indicates the ID of a virtual private cloud (VPC), and `vpc-bp1m6fww66xbntjyc****"` is a value that is assigned to VpcId.
     * @example {"VpcId": "vpc-bp1m6fww66xbntjyc****" }
     *
     * @var mixed[]
     */
    public $resourceIdentifier;

    /**
     * @description The type of the resource.
     *
     * @example ALIYUN::ECS::VPC
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'logicalResourceId'  => 'LogicalResourceId',
        'resourceIdentifier' => 'ResourceIdentifier',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->resourceIdentifier) {
            $res['ResourceIdentifier'] = $this->resourceIdentifier;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesToImport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['ResourceIdentifier'])) {
            $model->resourceIdentifier = $map['ResourceIdentifier'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
