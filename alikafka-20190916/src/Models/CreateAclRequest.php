<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class CreateAclRequest extends Model
{
    /**
     * @description The type of the operation allowed by the access control list (ACL). Valid values:
     *
     *   **Write**
     *   **Read**
     *   **Describe**: reads of transactional IDs.
     *   **IdempotentWrite**: idempotent data writes to clusters.
     *   **IDEMPOTENT_WRITE**: idempotent data writes to clusters. This value is available only for serverless ApsaraMQ for Kafka instances.
     *   **DESCRIBE_CONFIGS**: configuration query. This value is available only for serverless ApsaraMQ for Kafka instances.
     *
     * This parameter is required.
     * @example Read
     *
     * @var string
     */
    public $aclOperationType;

    /**
     * @description The types of operations allowed by the ACL. Separate multiple operation types with commas (,).
     *
     * Valid values:
     *
     *   **Write**
     *   **Read**
     *   **Describe**: reads of transactional IDs.
     *   **IdempotentWrite**: idempotent data writes to clusters.
     *   **IDEMPOTENT_WRITE**: idempotent data writes to clusters. This value is available only for serverless ApsaraMQ for Kafka instances.
     *   **DESCRIBE_CONFIGS**: configuration query. This value is available only for serverless ApsaraMQ for Kafka instances.
     *
     * >  This parameter is available only for serverless ApsaraMQ for Kafka instances.
     * @example Write,Read
     *
     * @var string
     */
    public $aclOperationTypes;

    /**
     * @description The authorization method. Valid values:
     *
     *   **DENY**
     *   **ALLOW**
     *
     * >  This parameter is available only for serverless ApsaraMQ for Kafka instances.
     * @example DENY
     *
     * @var string
     */
    public $aclPermissionType;

    /**
     * @description The resource name.
     *
     *   The value can be a topic name, a group ID, a cluster name, or a transaction ID.
     *   You can use an asterisk (\\*) to specify the names of all resources of the specified type.
     *
     * > You can use an asterisk (\\*) to query the resources on which permissions are granted only after you grant the user the required permissions on all resources.
     *
     * This parameter is required.
     * @example X****
     *
     * @var string
     */
    public $aclResourceName;

    /**
     * @description The matching mode. Valid values:
     *
     *   **LITERAL**: exact match
     *   **PREFIXED**: prefix match
     *
     * This parameter is required.
     * @example LITERAL
     *
     * @var string
     */
    public $aclResourcePatternType;

    /**
     * @description The resource type. Valid values:
     *
     *   **Topic**
     *   **Group**
     *   **Cluster**
     *   **TransactionalId**: transactional ID
     *
     * This parameter is required.
     * @example Group
     *
     * @var string
     */
    public $aclResourceType;

    /**
     * @description The IP address of the source.
     *
     * >
     *
     *   You can specify a specific IP address or use the asterisk (\\*) wildcard character to specify all IP addresses. CIDR blocks are not supported.
     *
     *   This parameter is available only for serverless ApsaraMQ for Kafka instances.
     *
     * @example *
     *
     * @var string
     */
    public $host;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_pre-cn-v0h1cng0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The username.
     *
     *   You can use an asterisk (\\*) to specify all usernames.
     *
     * > You can use an asterisk (\\*) to query the authorized users only after you grant the required permissions to all users.
     *
     * This parameter is required.
     * @example test***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'aclOperationType'       => 'AclOperationType',
        'aclOperationTypes'      => 'AclOperationTypes',
        'aclPermissionType'      => 'AclPermissionType',
        'aclResourceName'        => 'AclResourceName',
        'aclResourcePatternType' => 'AclResourcePatternType',
        'aclResourceType'        => 'AclResourceType',
        'host'                   => 'Host',
        'instanceId'             => 'InstanceId',
        'regionId'               => 'RegionId',
        'username'               => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclOperationType) {
            $res['AclOperationType'] = $this->aclOperationType;
        }
        if (null !== $this->aclOperationTypes) {
            $res['AclOperationTypes'] = $this->aclOperationTypes;
        }
        if (null !== $this->aclPermissionType) {
            $res['AclPermissionType'] = $this->aclPermissionType;
        }
        if (null !== $this->aclResourceName) {
            $res['AclResourceName'] = $this->aclResourceName;
        }
        if (null !== $this->aclResourcePatternType) {
            $res['AclResourcePatternType'] = $this->aclResourcePatternType;
        }
        if (null !== $this->aclResourceType) {
            $res['AclResourceType'] = $this->aclResourceType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclOperationType'])) {
            $model->aclOperationType = $map['AclOperationType'];
        }
        if (isset($map['AclOperationTypes'])) {
            $model->aclOperationTypes = $map['AclOperationTypes'];
        }
        if (isset($map['AclPermissionType'])) {
            $model->aclPermissionType = $map['AclPermissionType'];
        }
        if (isset($map['AclResourceName'])) {
            $model->aclResourceName = $map['AclResourceName'];
        }
        if (isset($map['AclResourcePatternType'])) {
            $model->aclResourcePatternType = $map['AclResourcePatternType'];
        }
        if (isset($map['AclResourceType'])) {
            $model->aclResourceType = $map['AclResourceType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
