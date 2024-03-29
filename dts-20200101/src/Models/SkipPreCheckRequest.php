<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SkipPreCheckRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example c7412z57g8k****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the precheck task. You can call the **DescribePreCheckStatus** operation to query the task ID.
     *
     * @example b4my3zg929a****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The region ID of the DTS instance. For more information, see [List of supported regions](~~141033~~).
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
     * @description Specifies whether to skip the precheck item. Valid values:
     *
     *   **true**: skips the precheck item.
     *   **false**: does not skip the precheck item.
     *
     * >  This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $skip;

    /**
     * @description The shortened name of the precheck item. Valid values:
     *
     *   **CHECK_SAME_OBJ**: object name conflict
     *
     *   **CHECK_SAME_USER**: multiple usernames for one instance
     *
     *   **CHECK_SRC**: source database version
     *
     *   **CHECK_TOPOLOGY**: topology type
     *
     * > For more information about the topologies supported by DTS, see [Synchronization topologies](~~124115~~).
     *
     *   **CHECK_SERVER_ID**: the server ID of the source database
     *
     * >  Separate multiple shortened names with commas (,).
     * @example CHECK_SAME_OBJ
     *
     * @var string
     */
    public $skipPreCheckItems;

    /**
     * @description The name of the precheck item. This parameter corresponds to the **SkipPreCheckItems** parameter. Valid values:
     *
     *   **CHECK_SAME_OBJ_DETAIL**: object name conflict
     *
     *   **CHECK_SAME_USER_DETAIL**: multiple usernames for one instance
     *
     *   **CHECK_SRC_DETAIL**: source database version
     *
     *   **CHECK_TOPOLOGY_DETAIL**: topology type
     *
     * > For more information about the topologies supported by DTS, see [Synchronization topologies](~~124115~~).
     *
     *   **CHECK_SERVER_ID_DETAIL**: the server ID of the source database
     *
     * >  Separate multiple item names with commas (,).
     * @example CHECK_SAME_OBJ_DETAIL
     *
     * @var string
     */
    public $skipPreCheckNames;
    protected $_name = [
        'dtsJobId'          => 'DtsJobId',
        'jobId'             => 'JobId',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'skip'              => 'Skip',
        'skipPreCheckItems' => 'SkipPreCheckItems',
        'skipPreCheckNames' => 'SkipPreCheckNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->skipPreCheckItems) {
            $res['SkipPreCheckItems'] = $this->skipPreCheckItems;
        }
        if (null !== $this->skipPreCheckNames) {
            $res['SkipPreCheckNames'] = $this->skipPreCheckNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SkipPreCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['SkipPreCheckItems'])) {
            $model->skipPreCheckItems = $map['SkipPreCheckItems'];
        }
        if (isset($map['SkipPreCheckNames'])) {
            $model->skipPreCheckNames = $map['SkipPreCheckNames'];
        }

        return $model;
    }
}
