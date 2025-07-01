<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponseBody\accessRules;

use AlibabaCloud\Dara\Model;

class accessRule extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $accessRuleId;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $RWAccess;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $userAccess;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'accessRuleId' => 'AccessRuleId',
        'fileSystemType' => 'FileSystemType',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'priority' => 'Priority',
        'RWAccess' => 'RWAccess',
        'regionId' => 'RegionId',
        'sourceCidrIp' => 'SourceCidrIp',
        'userAccess' => 'UserAccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
