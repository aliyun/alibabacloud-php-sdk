<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetInstanceResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example 1571926439000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIssue;

    /**
     * @example shanghai-instance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Enterprise_Basic
     *
     * @var string
     */
    public $instanceSpecification;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1571926560000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 6EF34B18-4228-470C-860C-D28597CF010E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmv36i4isx****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'code'                  => 'Code',
        'createTime'            => 'CreateTime',
        'instanceId'            => 'InstanceId',
        'instanceIssue'         => 'InstanceIssue',
        'instanceName'          => 'InstanceName',
        'instanceSpecification' => 'InstanceSpecification',
        'instanceStatus'        => 'InstanceStatus',
        'isSuccess'             => 'IsSuccess',
        'modifiedTime'          => 'ModifiedTime',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
        'tags'                  => 'Tags',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIssue) {
            $res['InstanceIssue'] = $this->instanceIssue;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpecification) {
            $res['InstanceSpecification'] = $this->instanceSpecification;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIssue'])) {
            $model->instanceIssue = $map['InstanceIssue'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpecification'])) {
            $model->instanceSpecification = $map['InstanceSpecification'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
