<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackInstanceRequest extends Model
{
    /**
     * @description Specifies whether to return the Outputs parameter. The Outputs parameter specifies the outputs of the stack. Valid values:
     *
     *   Enabled: returns the Outputs parameter.
     *   Disabled (default): does not return the Outputs parameter.
     *
     * >  The Outputs parameter requires a long period of time to calculate. If you do not require the outputs of the stack, we recommend that you set OutputOption to Disabled to improve the response speed of the API operation.
     * @example Disabled
     *
     * @var string
     */
    public $outputOption;

    /**
     * @description The region ID of the stack group. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/131035.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the stack group. The name must be unique within a region.\\
     * This parameter is required.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The ID of the destination account to which the stack belongs.
     *
     *   If the stack group is granted self-managed permissions, the stack belongs to an Alibaba Cloud account.
     *   If the stack group is granted service-managed permissions, the stack belongs to a member in a resource directory.
     *
     * This parameter is required.
     * @example 151266687691****
     *
     * @var string
     */
    public $stackInstanceAccountId;

    /**
     * @description The region ID of the stack.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $stackInstanceRegionId;
    protected $_name = [
        'outputOption'           => 'OutputOption',
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'stackInstanceAccountId' => 'StackInstanceAccountId',
        'stackInstanceRegionId'  => 'StackInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputOption) {
            $res['OutputOption'] = $this->outputOption;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackInstanceAccountId) {
            $res['StackInstanceAccountId'] = $this->stackInstanceAccountId;
        }
        if (null !== $this->stackInstanceRegionId) {
            $res['StackInstanceRegionId'] = $this->stackInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputOption'])) {
            $model->outputOption = $map['OutputOption'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackInstanceAccountId'])) {
            $model->stackInstanceAccountId = $map['StackInstanceAccountId'];
        }
        if (isset($map['StackInstanceRegionId'])) {
            $model->stackInstanceRegionId = $map['StackInstanceRegionId'];
        }

        return $model;
    }
}
