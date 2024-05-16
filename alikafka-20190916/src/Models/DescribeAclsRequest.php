<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class DescribeAclsRequest extends Model
{
    /**
     * @example Write
     *
     * @var string
     */
    public $aclOperationType;

    /**
     * @example DENY
     *
     * @var string
     */
    public $aclPermissionType;

    /**
     * @description The name or ID of the resource.
     *
     *   The value can be the name of a topic or a consumer group.
     *   You can use an asterisk (\\*) to represent the names of all topics or consumer groups.
     *
     * This parameter is required.
     * @example demo
     *
     * @var string
     */
    public $aclResourceName;

    /**
     * @description The match mode. Valid values:
     *
     *   LITERAL: full-name match
     *   PREFIXED: prefix match
     *
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
     *
     * This parameter is required.
     * @example Topic
     *
     * @var string
     */
    public $aclResourceType;

    /**
     * @example *
     *
     * @var string
     */
    public $host;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example alikafka_pre-cn-v0h1cng****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the user.
     *
     * This parameter is required.
     * @example test12****
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'aclOperationType'       => 'AclOperationType',
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
     * @return DescribeAclsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclOperationType'])) {
            $model->aclOperationType = $map['AclOperationType'];
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
