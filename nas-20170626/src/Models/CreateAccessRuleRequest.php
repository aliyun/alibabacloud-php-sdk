<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessRuleRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * This parameter is required.
     * @example vpc-test
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   standard (default): General-purpose NAS file system
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
     * You must set this parameter to an IPv6 address or CIDR block.
     *
     * > *   Only Extreme NAS file systems that reside in the Chinese mainland support IPv6. If you specify this parameter, you must enable IPv6 for the file system.
     * >*   Only permission groups that reside in virtual private clouds (VPCs) support IPv6.
     * >*   You cannot specify an IPv4 address and an IPv6 address at the same time.
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
    public $RWAccessType;

    /**
     * @description The IP address or CIDR block of the authorized object.
     *
     * > If the permission group resides in the classic network, you must set this parameter to an IP address.
     * @example 192.0.2.0/16
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The access permissions for different types of users in the authorized object.
     *
     * Valid values:
     *
     *   no_squash (default): grants root users the permissions to access the file system.
     *   root_squash: grants root users the least permissions as the nobody user.
     *   all_squash: grants all users the least permissions as the nobody user.
     *
     * The nobody user has the least permissions in Linux and can access only the public content of the file system. This ensures the security of the file system.
     * @example no_squash
     *
     * @var string
     */
    public $userAccessType;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'fileSystemType'   => 'FileSystemType',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'priority'         => 'Priority',
        'RWAccessType'     => 'RWAccessType',
        'sourceCidrIp'     => 'SourceCidrIp',
        'userAccessType'   => 'UserAccessType',
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
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->RWAccessType) {
            $res['RWAccessType'] = $this->RWAccessType;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->userAccessType) {
            $res['UserAccessType'] = $this->userAccessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
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
        if (isset($map['RWAccessType'])) {
            $model->RWAccessType = $map['RWAccessType'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['UserAccessType'])) {
            $model->userAccessType = $map['UserAccessType'];
        }

        return $model;
    }
}
