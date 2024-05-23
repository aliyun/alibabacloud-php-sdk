<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudMigrationTaskRequest extends Model
{
    /**
     * @description The ID of the destination instance. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example pgm-bp102g323jd4****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The username of the account that is used to connect to the self-managed PostgreSQL instance. Enter the username of the account that you created in the [Create an account for cloud migration on a self-managed PostgreSQL instance](https://help.aliyun.com/document_detail/369500.html) topic.
     *
     * This parameter is required.
     * @example migratetest
     *
     * @var string
     */
    public $sourceAccount;

    /**
     * @description The environment in which the self-managed PostgreSQL instance runs.
     *
     *   **idcOnVpc**: The self-managed PostgreSQL instance resides in a data center. The data center can communicate with the VPC to which the ApsaraDB RDS for PostgreSQL instance belongs.
     *   **ecsOnVpc**: The self-managed PostgreSQL instance resides on an ECS instance.
     *
     * This parameter is required.
     * @example ecsOnVpc
     *
     * @var string
     */
    public $sourceCategory;

    /**
     * @description The private or public IP address that is used to connect to the self-managed PostgreSQL instance.
     *
     *   If the self-managed PostgreSQL instance resides on an Elastic Compute Service (ECS) instance, enter the private IP address of the ECS instance. For more information about how to obtain the private IP address of an ECS instance, see [View IP addresses](https://help.aliyun.com/document_detail/273914.html).
     *   If the self-managed PostgreSQL instance resides in a data center, enter the private IP address of the data center.
     *
     * This parameter is required.
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The password of the account that is used to connect to the self-managed PostgreSQL instance. Enter the password of the account that you created in the [Create an account for cloud migration on a self-managed PostgreSQL instance](https://help.aliyun.com/document_detail/369500.html) topic.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var string
     */
    public $sourcePassword;

    /**
     * @description The port number that is used to connect to the self-managed PostgreSQL instance. You can run the `netstat -a | grep PGSQL` command to obtain the port number.
     *
     * This parameter is required.
     * @example 5432
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @description The name of the task. If you do not specify this parameter, ApsaraDB RDS automatically generates a name for the cloud migration task.
     *
     * @example 362c6c7a-4d20-4eac-898c-1495ceab374c
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceAccount'   => 'SourceAccount',
        'sourceCategory'  => 'SourceCategory',
        'sourceIpAddress' => 'SourceIpAddress',
        'sourcePassword'  => 'SourcePassword',
        'sourcePort'      => 'SourcePort',
        'taskName'        => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceAccount) {
            $res['SourceAccount'] = $this->sourceAccount;
        }
        if (null !== $this->sourceCategory) {
            $res['SourceCategory'] = $this->sourceCategory;
        }
        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }
        if (null !== $this->sourcePassword) {
            $res['SourcePassword'] = $this->sourcePassword;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudMigrationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceAccount'])) {
            $model->sourceAccount = $map['SourceAccount'];
        }
        if (isset($map['SourceCategory'])) {
            $model->sourceCategory = $map['SourceCategory'];
        }
        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }
        if (isset($map['SourcePassword'])) {
            $model->sourcePassword = $map['SourcePassword'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
