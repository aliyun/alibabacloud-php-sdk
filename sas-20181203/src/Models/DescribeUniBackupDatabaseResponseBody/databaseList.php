<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponseBody;

use AlibabaCloud\Tea\Model;

class databaseList extends Model
{
    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $createdByProduct;

    /**
     * @var string
     */
    public $databaseName;

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
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var int
     */
    public $policyId;

    /**
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
