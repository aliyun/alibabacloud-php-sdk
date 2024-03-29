<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ShieldPrecheckRequest extends Model
{
    /**
     * @description The ID of the data migration or data synchronization instance. You can call the **DescribeMigrationJobs** or DescribeSynchronizationJobs operation to query the instance ID.
     *
     * @example dtsi76118o3w92****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The precheck items that you want to ignore. Separate multiple items with commas (,). Valid values:
     *
     *   **CHECK_SAME_OBJ**: schema name conflict
     *
     *   **CHECK_SAME_USER**: multiple usernames for one instance
     *
     *   **CHECK_SRC**: source database version
     *
     *   **CHECK_TOPOLOGY**: topology
     *
     * > For more information about the topologies supported by DTS, see [Synchronization topologies](~~124115~~).
     *
     *   **CHECK_SERVER_ID**: value of server_id in the source database
     *
     * @example CHECK_SAME_OBJ
     *
     * @var string
     */
    public $precheckItems;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dtsInstanceId'   => 'DtsInstanceId',
        'precheckItems'   => 'PrecheckItems',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->precheckItems) {
            $res['PrecheckItems'] = $this->precheckItems;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShieldPrecheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['PrecheckItems'])) {
            $model->precheckItems = $map['PrecheckItems'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
