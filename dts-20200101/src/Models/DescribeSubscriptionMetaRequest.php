<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubscriptionMetaRequest extends Model
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
     * @description The ID of the consumer group.
     *
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
     * @var mixed[]
     */
    public $subMigrationJobIds;

    /**
     * @description The topics of all subtasks in the distributed change tracking task. Separate multiple topics with commas (,).
     *
     * >  You must specify at least one of the **SubMigrationJobIds** and Topics parameters. We recommend that you specify the **SubMigrationJobIds** parameter.
     * @example cn_hangzhou_rm_bp1n0x0x5tz******_dtstestdata_version2
     *
     * @var mixed[]
     */
    public $topics;
    protected $_name = [
        'dtsInstanceId'      => 'DtsInstanceId',
        'regionId'           => 'RegionId',
        'sid'                => 'Sid',
        'subMigrationJobIds' => 'SubMigrationJobIds',
        'topics'             => 'Topics',
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
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->subMigrationJobIds) {
            $res['SubMigrationJobIds'] = $this->subMigrationJobIds;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionMetaRequest
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
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['SubMigrationJobIds'])) {
            $model->subMigrationJobIds = $map['SubMigrationJobIds'];
        }
        if (isset($map['Topics'])) {
            $model->topics = $map['Topics'];
        }

        return $model;
    }
}
