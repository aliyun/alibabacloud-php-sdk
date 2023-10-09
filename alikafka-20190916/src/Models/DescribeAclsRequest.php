<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class DescribeAclsRequest extends Model
{
    /**
     * @description The name or ID of the resource.
     *
     *   The value can be the name of a topic or a consumer group.
     *   You can use an asterisk (\*) to represent the names of all topics or consumer groups.
     *
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
     * @example Topic
     *
     * @var string
     */
    public $aclResourceType;

    /**
     * @description The ID of the instance.
     *
     * @example alikafka_pre-cn-v0h1cng****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the user.
     *
     * @example test12****
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'aclResourceName'        => 'AclResourceName',
        'aclResourcePatternType' => 'AclResourcePatternType',
        'aclResourceType'        => 'AclResourceType',
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
        if (null !== $this->aclResourceName) {
            $res['AclResourceName'] = $this->aclResourceName;
        }
        if (null !== $this->aclResourcePatternType) {
            $res['AclResourcePatternType'] = $this->aclResourcePatternType;
        }
        if (null !== $this->aclResourceType) {
            $res['AclResourceType'] = $this->aclResourceType;
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
        if (isset($map['AclResourceName'])) {
            $model->aclResourceName = $map['AclResourceName'];
        }
        if (isset($map['AclResourcePatternType'])) {
            $model->aclResourcePatternType = $map['AclResourcePatternType'];
        }
        if (isset($map['AclResourceType'])) {
            $model->aclResourceType = $map['AclResourceType'];
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
