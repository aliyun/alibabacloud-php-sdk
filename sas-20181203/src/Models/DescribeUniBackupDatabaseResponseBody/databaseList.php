<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody;

use AlibabaCloud\Tea\Model;

class databaseList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $databaseVersion;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var string
     */
    public $createdByProduct;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $agentStatus;
    protected $_name = [
        'status'           => 'Status',
        'databaseType'     => 'DatabaseType',
        'databaseVersion'  => 'DatabaseVersion',
        'databaseName'     => 'DatabaseName',
        'instanceName'     => 'InstanceName',
        'instanceUuid'     => 'InstanceUuid',
        'createdByProduct' => 'CreatedByProduct',
        'instanceId'       => 'InstanceId',
        'policyId'         => 'PolicyId',
        'agentStatus'      => 'AgentStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->databaseVersion) {
            $res['DatabaseVersion'] = $this->databaseVersion;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->createdByProduct) {
            $res['CreatedByProduct'] = $this->createdByProduct;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['DatabaseVersion'])) {
            $model->databaseVersion = $map['DatabaseVersion'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['CreatedByProduct'])) {
            $model->createdByProduct = $map['CreatedByProduct'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        return $model;
    }
}
