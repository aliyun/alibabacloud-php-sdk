<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody;

use AlibabaCloud\Tea\Model;

class operationInfo extends Model
{
    /**
     * @description The name of the API of another cloud service.
     *
     * @example DeleteSecurityGroup
     *
     * @var string
     */
    public $action;

    /**
     * @description The error code returned.
     *
     * @example DependencyViolation
     *
     * @var string
     */
    public $code;

    /**
     * @description The logical ID of the resource on which the operation error occurred.
     *
     * @example EcsSecurityGroup
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The error message returned.
     *
     * @example There is still instance(s) in the specified security group.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request to call the API of another cloud service.
     *
     * @example 071D6166-3F6B-5C7B-A1F0-0113FBB643A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the resource on which the operation error occurred.
     *
     * @example ALIYUN::ECS::SecurityGroup
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'action'            => 'Action',
        'code'              => 'Code',
        'logicalResourceId' => 'LogicalResourceId',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'resourceType'      => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
