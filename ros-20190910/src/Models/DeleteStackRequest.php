<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackRequest extends Model
{
    /**
     * @description The options for deleting the stack.
     *
     * @var string[]
     */
    public $deleteOptions;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @description The name of the RAM role. Resource Orchestration Service (ROS) assumes the RAM role to create the stack and uses the credentials of the role to call the APIs of Alibaba Cloud services.\\
     * The name of the RAM role can be up to 64 bytes in length.
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/131035.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to retain all resources in the stack.
     *
     * Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @description The resources that you want to retain.
     *
     * @example WebServer
     *
     * @var string[]
     */
    public $retainResources;

    /**
     * @description The ID of the stack.
     *
     * This parameter is required.
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'deleteOptions'      => 'DeleteOptions',
        'parallelism'        => 'Parallelism',
        'ramRoleName'        => 'RamRoleName',
        'regionId'           => 'RegionId',
        'retainAllResources' => 'RetainAllResources',
        'retainResources'    => 'RetainResources',
        'stackId'            => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteOptions) {
            $res['DeleteOptions'] = $this->deleteOptions;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retainAllResources) {
            $res['RetainAllResources'] = $this->retainAllResources;
        }
        if (null !== $this->retainResources) {
            $res['RetainResources'] = $this->retainResources;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteOptions'])) {
            if (!empty($map['DeleteOptions'])) {
                $model->deleteOptions = $map['DeleteOptions'];
            }
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RetainAllResources'])) {
            $model->retainAllResources = $map['RetainAllResources'];
        }
        if (isset($map['RetainResources'])) {
            if (!empty($map['RetainResources'])) {
                $model->retainResources = $map['RetainResources'];
            }
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
