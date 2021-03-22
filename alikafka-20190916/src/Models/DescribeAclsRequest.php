<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class DescribeAclsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $aclResourceType;

    /**
     * @var string
     */
    public $aclResourceName;

    /**
     * @var string
     */
    public $aclResourcePatternType;
    protected $_name = [
        'regionId'               => 'RegionId',
        'instanceId'             => 'InstanceId',
        'username'               => 'Username',
        'aclResourceType'        => 'AclResourceType',
        'aclResourceName'        => 'AclResourceName',
        'aclResourcePatternType' => 'AclResourcePatternType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->aclResourceType) {
            $res['AclResourceType'] = $this->aclResourceType;
        }
        if (null !== $this->aclResourceName) {
            $res['AclResourceName'] = $this->aclResourceName;
        }
        if (null !== $this->aclResourcePatternType) {
            $res['AclResourcePatternType'] = $this->aclResourcePatternType;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['AclResourceType'])) {
            $model->aclResourceType = $map['AclResourceType'];
        }
        if (isset($map['AclResourceName'])) {
            $model->aclResourceName = $map['AclResourceName'];
        }
        if (isset($map['AclResourcePatternType'])) {
            $model->aclResourcePatternType = $map['AclResourcePatternType'];
        }

        return $model;
    }
}
