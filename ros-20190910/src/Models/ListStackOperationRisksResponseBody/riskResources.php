<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponseBody;

use AlibabaCloud\Tea\Model;

class riskResources extends Model
{
    /**
     * @example NoPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example MySG
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @example You are not authorized to complete this action.
     *
     * @var string
     */
    public $message;

    /**
     * @example sg-bp1dpioafqphedg9****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @example There are some ECS instances (i-bp18el96s4wq635e****) depending on the security group.
     *
     * @var string
     */
    public $reason;

    /**
     * @example DF4296CF-F45F-4845-A72B-BE617601DB25
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ALIYUN::ECS::SecurityGroup
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Referenced
     *
     * @var string
     */
    public $riskType;
    protected $_name = [
        'code'               => 'Code',
        'logicalResourceId'  => 'LogicalResourceId',
        'message'            => 'Message',
        'physicalResourceId' => 'PhysicalResourceId',
        'reason'             => 'Reason',
        'requestId'          => 'RequestId',
        'resourceType'       => 'ResourceType',
        'riskType'           => 'RiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
