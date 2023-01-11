<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;

use AlibabaCloud\Tea\Model;

class resourcesToImport extends Model
{
    /**
     * @example Vpc
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @example {"VpcId": "vpc-2zevx9ios******"}
     *
     * @var string
     */
    public $resourceIdentifier;

    /**
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
