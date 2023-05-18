<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackResourceRequest extends Model
{
    /**
     * @description Specifies whether to query the resource properties. Valid values:
     *
     *   true
     *   false
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of resource property N that you want to query.
     *
     * >  Maximum value of N: 20.
     * @example WebServer
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The logical ID of the resource defined in the template.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the resource. Valid values:
     *
     *   CREATE_COMPLETE
     *   CREATE_FAILED
     *   CREATE_IN_PROGRESS
     *   UPDATE_IN_PROGRESS
     *   UPDATE_FAILED
     *   UPDATE_COMPLETE
     *   DELETE_IN_PROGRESS
     *   DELETE_FAILED
     *   CHECK_IN_PROGRESS
     *   CHECK_FAILED
     *   CHECK_COMPLETE
     *   IMPORT_IN_PROGRESS
     *   IMPORT_FAILED
     *   IMPORT_COMPLETE
     *
     * @var string[]
     */
    public $resourceAttributes;

    /**
     * @description The name of resource property N that you want to query.
     *
     * @example true
     *
     * @var bool
     */
    public $showResourceAttributes;

    /**
     * @description The ID of the region to which the stack belongs. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'logicalResourceId'      => 'LogicalResourceId',
        'regionId'               => 'RegionId',
        'resourceAttributes'     => 'ResourceAttributes',
        'showResourceAttributes' => 'ShowResourceAttributes',
        'stackId'                => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceAttributes) {
            $res['ResourceAttributes'] = $this->resourceAttributes;
        }
        if (null !== $this->showResourceAttributes) {
            $res['ShowResourceAttributes'] = $this->showResourceAttributes;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceAttributes'])) {
            if (!empty($map['ResourceAttributes'])) {
                $model->resourceAttributes = $map['ResourceAttributes'];
            }
        }
        if (isset($map['ShowResourceAttributes'])) {
            $model->showResourceAttributes = $map['ShowResourceAttributes'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
