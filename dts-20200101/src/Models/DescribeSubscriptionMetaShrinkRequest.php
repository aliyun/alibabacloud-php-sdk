<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubscriptionMetaShrinkRequest extends Model
{
    /**
     * @description The ID of the distributed change tracking instance.
     *
     * @example dtsbr4m9luv2******
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the region in which the change tracking instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the consumer group.
     *
     * This parameter is required.
     * @example z38m91gg2******
     *
     * @var string
     */
    public $sid;

    /**
     * @description The IDs of all subtasks in the distributed change tracking task. Separate multiple subtask IDs with commas (,).
     *
     * >  You must specify at least one of the SubMigrationJobIds and **Topics** parameters. We recommend that you specify the SubMigrationJobIds parameter.
     * @example z38m91gg2******
     *
     * @var string
     */
    public $subMigrationJobIdsShrink;

    /**
     * @description The topics of all subtasks in the distributed change tracking task. Separate multiple topics with commas (,).
     *
     * >  You must specify at least one of the **SubMigrationJobIds** and Topics parameters. We recommend that you specify the **SubMigrationJobIds** parameter.
     * @example cn_hangzhou_rm_bp1n0x0x5tz******_dtstestdata_version2
     *
     * @var string
     */
    public $topicsShrink;
    protected $_name = [
        'dtsInstanceId'            => 'DtsInstanceId',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'sid'                      => 'Sid',
        'subMigrationJobIdsShrink' => 'SubMigrationJobIds',
        'topicsShrink'             => 'Topics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->subMigrationJobIdsShrink) {
            $res['SubMigrationJobIds'] = $this->subMigrationJobIdsShrink;
        }
        if (null !== $this->topicsShrink) {
            $res['Topics'] = $this->topicsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionMetaShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['SubMigrationJobIds'])) {
            $model->subMigrationJobIdsShrink = $map['SubMigrationJobIds'];
        }
        if (isset($map['Topics'])) {
            $model->topicsShrink = $map['Topics'];
        }

        return $model;
    }
}
