<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;

use AlibabaCloud\Tea\Model;

class resourcesToImport extends Model
{
    /**
     * @description The logical ID of resource N that you want to import. The logical ID specifies the name of resource N that is defined in the template.
     *
     * > This parameter takes effect only if you set ChangeSetType to IMPORT. ResourcesToImport is optional. If you specify ResourcesToImport, you must also specify ResourcesToImport.N.LogicalResourceId.
     * @example Vpc
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The key-value mapping between strings. The value is a JSON string that identifies resource N that you want to import.\
     * A key is an identifier for a resource and a value is an assignment of data to the key. For example, VpcId is a key that indicates the ID of a virtual private cloud (VPC), and `vpc-2zevx9ios****` is a value that is assigned to VpcId. You can call the [GetTemplateSummary](~~172485~~) operation to obtain the key of a resource.
     *
     * > This parameter takes effect only if you set ChangeSetType to IMPORT. ResourcesToImport is optional. If you specify ResourcesToImport, you must also specify ResourcesToImport.N.ResourceIdentifier.
     * @example {"VpcId": "vpc-2zevx9ios******"}
     *
     * @var string
     */
    public $resourceIdentifier;

    /**
     * @description The type of resource N that you want to import. The resource type must be the same as the resource type that is defined in the template.
     *
     * > This parameter takes effect only if you set ChangeSetType to IMPORT. ResourcesToImport is optional. If you specify ResourcesToImport, you must also specify ResourcesToImport.N.ResourceType.
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
