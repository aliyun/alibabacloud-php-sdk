<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponseBody\permissions;

use AlibabaCloud\Tea\Model;

class permission extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $sourceGroupId;

    /**
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @var string
     */
    public $destPrefixListId;

    /**
     * @var string
     */
    public $destPrefixListName;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @var string
     */
    public $destGroupId;

    /**
     * @var string
     */
    public $destCidrIp;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $destGroupName;

    /**
     * @var string
     */
    public $nicType;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $sourcePrefixListName;

    /**
     * @var string
     */
    public $sourcePrefixListId;

    /**
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @var string
     */
    public $sourceGroupName;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'direction'               => 'Direction',
        'sourceGroupId'           => 'SourceGroupId',
        'destGroupOwnerAccount'   => 'DestGroupOwnerAccount',
        'destPrefixListId'        => 'DestPrefixListId',
        'destPrefixListName'      => 'DestPrefixListName',
        'sourceCidrIp'            => 'SourceCidrIp',
        'ipv6DestCidrIp'          => 'Ipv6DestCidrIp',
        'createTime'              => 'CreateTime',
        'ipv6SourceCidrIp'        => 'Ipv6SourceCidrIp',
        'destGroupId'             => 'DestGroupId',
        'destCidrIp'              => 'DestCidrIp',
        'ipProtocol'              => 'IpProtocol',
        'priority'                => 'Priority',
        'destGroupName'           => 'DestGroupName',
        'nicType'                 => 'NicType',
        'policy'                  => 'Policy',
        'description'             => 'Description',
        'portRange'               => 'PortRange',
        'sourcePrefixListName'    => 'SourcePrefixListName',
        'sourcePrefixListId'      => 'SourcePrefixListId',
        'sourceGroupOwnerAccount' => 'SourceGroupOwnerAccount',
        'sourceGroupName'         => 'SourceGroupName',
        'sourcePortRange'         => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->destGroupOwnerAccount) {
            $res['DestGroupOwnerAccount'] = $this->destGroupOwnerAccount;
        }
        if (null !== $this->destPrefixListId) {
            $res['DestPrefixListId'] = $this->destPrefixListId;
        }
        if (null !== $this->destPrefixListName) {
            $res['DestPrefixListName'] = $this->destPrefixListName;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->destGroupId) {
            $res['DestGroupId'] = $this->destGroupId;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->destGroupName) {
            $res['DestGroupName'] = $this->destGroupName;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->sourcePrefixListName) {
            $res['SourcePrefixListName'] = $this->sourcePrefixListName;
        }
        if (null !== $this->sourcePrefixListId) {
            $res['SourcePrefixListId'] = $this->sourcePrefixListId;
        }
        if (null !== $this->sourceGroupOwnerAccount) {
            $res['SourceGroupOwnerAccount'] = $this->sourceGroupOwnerAccount;
        }
        if (null !== $this->sourceGroupName) {
            $res['SourceGroupName'] = $this->sourceGroupName;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['DestGroupOwnerAccount'])) {
            $model->destGroupOwnerAccount = $map['DestGroupOwnerAccount'];
        }
        if (isset($map['DestPrefixListId'])) {
            $model->destPrefixListId = $map['DestPrefixListId'];
        }
        if (isset($map['DestPrefixListName'])) {
            $model->destPrefixListName = $map['DestPrefixListName'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['DestGroupId'])) {
            $model->destGroupId = $map['DestGroupId'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['DestGroupName'])) {
            $model->destGroupName = $map['DestGroupName'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SourcePrefixListName'])) {
            $model->sourcePrefixListName = $map['SourcePrefixListName'];
        }
        if (isset($map['SourcePrefixListId'])) {
            $model->sourcePrefixListId = $map['SourcePrefixListId'];
        }
        if (isset($map['SourceGroupOwnerAccount'])) {
            $model->sourceGroupOwnerAccount = $map['SourceGroupOwnerAccount'];
        }
        if (isset($map['SourceGroupName'])) {
            $model->sourceGroupName = $map['SourceGroupName'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
