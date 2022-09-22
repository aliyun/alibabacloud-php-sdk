<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\ConfigureSecurityGroupPermissionsRequest;

use AlibabaCloud\Tea\Model;

class revokePermission extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destCidrIp;

    /**
     * @var string
     */
    public $destGroupId;

    /**
     * @var string
     */
    public $destPrefixListId;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $gressFlow;

    /**
     * @var string
     */
    public $groupOwnerAccount;

    /**
     * @var int
     */
    public $groupOwnerId;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

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
    public $portRange;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $sourceGroupId;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $sourcePrefixListId;
    protected $_name = [
        'description'        => 'Description',
        'destCidrIp'         => 'DestCidrIp',
        'destGroupId'        => 'DestGroupId',
        'destPrefixListId'   => 'DestPrefixListId',
        'direction'          => 'Direction',
        'gressFlow'          => 'GressFlow',
        'groupOwnerAccount'  => 'GroupOwnerAccount',
        'groupOwnerId'       => 'GroupOwnerId',
        'ipProtocol'         => 'IpProtocol',
        'ipv6DestCidrIp'     => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'   => 'Ipv6SourceCidrIp',
        'nicType'            => 'NicType',
        'policy'             => 'Policy',
        'portRange'          => 'PortRange',
        'priority'           => 'Priority',
        'sourceCidrIp'       => 'SourceCidrIp',
        'sourceGroupId'      => 'SourceGroupId',
        'sourcePortRange'    => 'SourcePortRange',
        'sourcePrefixListId' => 'SourcePrefixListId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->destGroupId) {
            $res['DestGroupId'] = $this->destGroupId;
        }
        if (null !== $this->destPrefixListId) {
            $res['DestPrefixListId'] = $this->destPrefixListId;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->gressFlow) {
            $res['GressFlow'] = $this->gressFlow;
        }
        if (null !== $this->groupOwnerAccount) {
            $res['GroupOwnerAccount'] = $this->groupOwnerAccount;
        }
        if (null !== $this->groupOwnerId) {
            $res['GroupOwnerId'] = $this->groupOwnerId;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourcePrefixListId) {
            $res['SourcePrefixListId'] = $this->sourcePrefixListId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return revokePermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['DestGroupId'])) {
            $model->destGroupId = $map['DestGroupId'];
        }
        if (isset($map['DestPrefixListId'])) {
            $model->destPrefixListId = $map['DestPrefixListId'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['GressFlow'])) {
            $model->gressFlow = $map['GressFlow'];
        }
        if (isset($map['GroupOwnerAccount'])) {
            $model->groupOwnerAccount = $map['GroupOwnerAccount'];
        }
        if (isset($map['GroupOwnerId'])) {
            $model->groupOwnerId = $map['GroupOwnerId'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourcePrefixListId'])) {
            $model->sourcePrefixListId = $map['SourcePrefixListId'];
        }

        return $model;
    }
}
