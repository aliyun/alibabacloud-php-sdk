<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponseBody\accessRules;

use AlibabaCloud\Tea\Model;

class accessRule extends Model
{
    /**
     * @description The name of the permission group.
     *
     * @example test
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The ID of the rule.
     *
     * @example 1
     *
     * @var string
     */
    public $accessRuleId;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   standard: General-purpose Apsara File Storage NAS (NAS) file system
     *   extreme: Extreme NAS file system
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The IPv6 address or CIDR block of the authorized object.
     *
     * @example 2001:250:6000::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description The priority of the rule.
     *
     * Valid values: 1 to 100. The value 1 indicates the highest priority.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The access permissions of the authorized object on the file system.
     *
     * Valid values:
     *
     *   RDWR (default): the read and write permissions
     *   RDONLY: the read-only permissions
     *
     * @example RDWR
     *
     * @var string
     */
    public $RWAccess;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP address or CIDR block of the authorized object.
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The access permissions for different types of users in the authorized object.
     *
     * Valid values:
     *
     *   no_squash: allows access from root users to the file system.
     *   root_squash: grants root users the least permissions as the nobody user.
     *   all_squash: grants all users the least permissions as the nobody user.
     *
     * The nobody user has the least permissions in Linux and can access only the public content of the file system. This ensures the security of the file system.
     * @example no_squash
     *
     * @var string
     */
    public $userAccess;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'accessRuleId'     => 'AccessRuleId',
        'fileSystemType'   => 'FileSystemType',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'priority'         => 'Priority',
        'RWAccess'         => 'RWAccess',
        'regionId'         => 'RegionId',
        'sourceCidrIp'     => 'SourceCidrIp',
        'userAccess'       => 'UserAccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->RWAccess) {
            $res['RWAccess'] = $this->RWAccess;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->userAccess) {
            $res['UserAccess'] = $this->userAccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RWAccess'])) {
            $model->RWAccess = $map['RWAccess'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['UserAccess'])) {
            $model->userAccess = $map['UserAccess'];
        }

        return $model;
    }
}
