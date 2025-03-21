<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyMasterSpecRequest extends Model
{
    /**
     * @description The description of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the IDs of all AnalyticDB for PostgreSQL instances in a region.
     *
     * This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter must be specified if you want to change coordinator nodes to AI coordinator nodes.
     * >-  You cannot specify the MasterAISpec and MasterCU parameters at the same time.
     * >- You can change coordinator nodes to AI coordinator nodes only in specific regions and zones.
     * >- Only AnalyticDB for PostgreSQL V7.0 instances of Basic Edition support AI coordinator nodes.
     * >- You can view the valid values of this parameter on the configuration change page of coordinator nodes.
     *
     * @example ADB.AIMedium.2
     *
     * @var string
     */
    public $masterAISpec;

    /**
     * @description The specifications of coordinator node resources. Valid values:
     *
     *   2 CU
     *   4 CU
     *   8 CU
     *   16 CU
     *   32 CU
     *
     * >  You are charged for coordinator node resources of more than 8 compute units (CUs).
     *
     * @example 8 CU
     *
     * @var int
     */
    public $masterCU;

    /**
     * @description The ID of the resource group to which the instance belongs. For information about how to obtain the ID of a resource group, see [View basic information of a resource group](https://help.aliyun.com/document_detail/151181.html).
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId' => 'DBInstanceId',
        'masterAISpec' => 'MasterAISpec',
        'masterCU' => 'MasterCU',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->masterAISpec) {
            $res['MasterAISpec'] = $this->masterAISpec;
        }
        if (null !== $this->masterCU) {
            $res['MasterCU'] = $this->masterCU;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMasterSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['MasterAISpec'])) {
            $model->masterAISpec = $map['MasterAISpec'];
        }
        if (isset($map['MasterCU'])) {
            $model->masterCU = $map['MasterCU'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
