<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponse\directories\ADConnectors;
use AlibabaCloud\Tea\Model;

class directories extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $customSecurityGroupId;

    /**
     * @var string
     */
    public $dnsUserName;

    /**
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @var string
     */
    public $trustPassword;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainUserName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var ADConnectors[]
     */
    public $ADConnectors;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'directoryId'           => 'DirectoryId',
        'status'                => 'Status',
        'directoryType'         => 'DirectoryType',
        'creationTime'          => 'CreationTime',
        'name'                  => 'Name',
        'vpcId'                 => 'VpcId',
        'customSecurityGroupId' => 'CustomSecurityGroupId',
        'dnsUserName'           => 'DnsUserName',
        'enableInternetAccess'  => 'EnableInternetAccess',
        'trustPassword'         => 'TrustPassword',
        'domainName'            => 'DomainName',
        'domainUserName'        => 'DomainUserName',
        'domainPassword'        => 'DomainPassword',
        'ADConnectors'          => 'ADConnectors',
        'dnsAddress'            => 'DnsAddress',
        'vSwitchIds'            => 'VSwitchIds',
    ];

    public function validate()
    {
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('directoryType', $this->directoryType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('customSecurityGroupId', $this->customSecurityGroupId, true);
        Model::validateRequired('dnsUserName', $this->dnsUserName, true);
        Model::validateRequired('enableInternetAccess', $this->enableInternetAccess, true);
        Model::validateRequired('trustPassword', $this->trustPassword, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainUserName', $this->domainUserName, true);
        Model::validateRequired('domainPassword', $this->domainPassword, true);
        Model::validateRequired('ADConnectors', $this->ADConnectors, true);
        Model::validateRequired('dnsAddress', $this->dnsAddress, true);
        Model::validateRequired('vSwitchIds', $this->vSwitchIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->customSecurityGroupId) {
            $res['CustomSecurityGroupId'] = $this->customSecurityGroupId;
        }
        if (null !== $this->dnsUserName) {
            $res['DnsUserName'] = $this->dnsUserName;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->ADConnectors) {
            $res['ADConnectors'] = [];
            if (null !== $this->ADConnectors && \is_array($this->ADConnectors)) {
                $n = 0;
                foreach ($this->ADConnectors as $item) {
                    $res['ADConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CustomSecurityGroupId'])) {
            $model->customSecurityGroupId = $map['CustomSecurityGroupId'];
        }
        if (isset($map['DnsUserName'])) {
            $model->dnsUserName = $map['DnsUserName'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['ADConnectors'])) {
            if (!empty($map['ADConnectors'])) {
                $model->ADConnectors = [];
                $n                   = 0;
                foreach ($map['ADConnectors'] as $item) {
                    $model->ADConnectors[$n++] = null !== $item ? ADConnectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
