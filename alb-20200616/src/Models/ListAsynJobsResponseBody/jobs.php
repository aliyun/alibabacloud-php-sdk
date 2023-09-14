<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAsynJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The name of the operation.
     *
     * @example CreateLoadBalancer
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The timestamp that indicates the start time of the task. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 2134663231234
     *
     * @var int
     */
    public $createTime;

    /**
     * @description If the value of **Status** is Failed, an error code is returned.
     *
     * @example 506
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description If the value of **Status** is Failed, an error message is returned.
     *
     * @example AllocateEipAddress Failed
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The task ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B5****
     *
     * @var string
     */
    public $id;

    /**
     * @description The timestamp that indicates the end time of the task. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 2144663233315
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The type of the operation. Valid values:
     *
     *   **Create**
     *   **Update**
     *   **Delete**
     *
     * @example Create
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The associated resource ID.
     *
     * @example alb-o8mszt95oamfjy****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the associated resource. Valid values:
     *
     *   **loadbalancer**: an ALB instance
     *   **listener**: a listener
     *   **rule**: a forwarding rule
     *   **acl**: an ACL
     *   **securitypolicy**: a security policy
     *   **servergroup**: a server group
     *
     * @example acl
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the task. Valid values:
     *
     *   **Succeeded**
     *   **Failed**
     *   **Processing**
     *
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'apiName'      => 'ApiName',
        'createTime'   => 'CreateTime',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'id'           => 'Id',
        'modifyTime'   => 'ModifyTime',
        'operateType'  => 'OperateType',
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
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
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
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
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
