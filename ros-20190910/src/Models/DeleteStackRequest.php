<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackRequest extends Model
{
    /**
     * @var string[]
     */
    public $deleteOptions;

    /**
     * @description The name of resource N that you want to retain.
     *
     * @example test-role
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The name of resource N that you want to retain.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the RAM role. Resource Orchestration Service (ROS) assumes the RAM role to create the stack and uses credentials of the role to call the APIs of Alibaba Cloud services.
     *
     * The name of the RAM role can be up to 64 bytes in length.
     * @example false
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @description The ID of the request.
     *
     * @example WebServer
     *
     * @var string[]
     */
    public $retainResources;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'deleteOptions'      => 'DeleteOptions',
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
