<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody;

use AlibabaCloud\Tea\Model;

class databaseList extends Model
{
    /**
     * @description The status of the anti-ransomware agent. Valid values:
     *
     *   **UNKNOWN**: unknown
     *   **INSTALLED**: installed
     *   **INSTALL_FAILED**: installation failed
     *   **UNINSTALL_FAILED**: uninstallation failed
     *
     * @example INSTALLED
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description The service from which the database is created. Valid values:
     *
     *   **HBR**: HBR
     *   **AEGIS**: Security Center
     *
     * @example AEGIS
     *
     * @var string
     */
    public $createdByProduct;

    /**
     * @description The name of the database.
     *
     * @example apns_tt180
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The type of the database. Valid values:
     *
     *   **MYSQL**
     *   **MSSQL**
     *   **Oracle**
     *
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The version of the database engine.
     *
     * @example 12.0.4100.1
     *
     * @var string
     */
    public $databaseVersion;

    /**
     * @description The ID of the server.
     *
     * @example i-bp15aho9hhftvmhw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance to which the database belongs.
     *
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The UUID of the Hybrid Backup Recovery (HBR) agent that is used to back up the data of the database.
     *
     * @example 85878b284df911ec800000163e19****
     *
     * @var string
     */
    public $instanceUuid;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The status of the ECS instance. Valid values:
     *
     *   **Stopped**
     *   **Running**
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'agentStatus'      => 'AgentStatus',
        'createdByProduct' => 'CreatedByProduct',
        'databaseName'     => 'DatabaseName',
        'databaseType'     => 'DatabaseType',
        'databaseVersion'  => 'DatabaseVersion',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceUuid'     => 'InstanceUuid',
        'policyId'         => 'PolicyId',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->createdByProduct) {
            $res['CreatedByProduct'] = $this->createdByProduct;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->databaseVersion) {
            $res['DatabaseVersion'] = $this->databaseVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['CreatedByProduct'])) {
            $model->createdByProduct = $map['CreatedByProduct'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['DatabaseVersion'])) {
            $model->databaseVersion = $map['DatabaseVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
