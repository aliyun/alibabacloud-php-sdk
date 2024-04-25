<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeGadInstancesResponseBody\gadInstances;

use AlibabaCloud\Tea\Model;

class gadInstanceMembers extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example rm-bp1npi2j8********
     *
     * @var string
     */
    public $DBInstanceID;

    /**
     * @description A JSON array that consists of the details about the Data Transmission Service (DTS) synchronization task.
     *
     * >  Each unit node (secondary node) synchronizes data from the central node (primary node) by using DTS. This parameter contains the synchronization link ID and request ID of DTS.
     * @example {\"dtsInstanceId\":\"dtsm9t107c********\",\"dtsRequestId\":\"190F0C6C-4BE6-5676-989B-DBDE6D34CD9C\"}
     *
     * @var string
     */
    public $dtsInstance;

    /**
     * @description The database engine that is run by the node.
     *
     * >  The value of this parameter is fixed as **mysql**.
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version that is run by the node.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the region where the node resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the node. Valid values:
     *
     *   **CENTRAL**: The node is a central node. Each global active database cluster has only one central node. All unit nodes synchronize data from the central node.
     *   **UNIT**: The node is a unit node. Each global active database cluster can have up to 10 unit nodes. All unit nodes synchronize data from the central node.
     *
     * @example CENTRAL
     *
     * @var string
     */
    public $role;

    /**
     * @description The node status. Valid values:
     *
     *   **activation**: The node is running.
     *   **creating**: The node is being created.
     *
     * @example activation
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'DBInstanceID'    => 'DBInstanceID',
        'dtsInstance'     => 'DtsInstance',
        'engine'          => 'Engine',
        'engineVersion'   => 'EngineVersion',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'role'            => 'Role',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->dtsInstance) {
            $res['DtsInstance'] = $this->dtsInstance;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gadInstanceMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DtsInstance'])) {
            $model->dtsInstance = $map['DtsInstance'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
