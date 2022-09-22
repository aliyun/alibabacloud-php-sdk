<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent;

use AlibabaCloud\Tea\Model;

class securityGroupAcl extends Model
{
    /**
     * @var string
     */
    public $createTime;

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
    public $destGroupName;

    /**
     * @var string
     */
    public $destPortRange;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $innerAccessPolicy;

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
    public $permissionDescription;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $securityGroupId;

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
    public $sourceGroupName;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'destCidrIp'            => 'DestCidrIp',
        'destGroupId'           => 'DestGroupId',
        'destGroupName'         => 'DestGroupName',
        'destPortRange'         => 'DestPortRange',
        'direction'             => 'Direction',
        'innerAccessPolicy'     => 'InnerAccessPolicy',
        'ipProtocol'            => 'IpProtocol',
        'ipv6DestCidrIp'        => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'      => 'Ipv6SourceCidrIp',
        'nicType'               => 'NicType',
        'permissionDescription' => 'PermissionDescription',
        'policy'                => 'Policy',
        'priority'              => 'Priority',
        'securityGroupId'       => 'SecurityGroupId',
        'sourceCidrIp'          => 'SourceCidrIp',
        'sourceGroupId'         => 'SourceGroupId',
        'sourceGroupName'       => 'SourceGroupName',
        'sourcePortRange'       => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->destGroupId) {
            $res['DestGroupId'] = $this->destGroupId;
        }
        if (null !== $this->destGroupName) {
            $res['DestGroupName'] = $this->destGroupName;
        }
        if (null !== $this->destPortRange) {
            $res['DestPortRange'] = $this->destPortRange;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->innerAccessPolicy) {
            $res['InnerAccessPolicy'] = $this->innerAccessPolicy;
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
        if (null !== $this->permissionDescription) {
            $res['PermissionDescription'] = $this->permissionDescription;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
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
     * @return securityGroupAcl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['DestGroupId'])) {
            $model->destGroupId = $map['DestGroupId'];
        }
        if (isset($map['DestGroupName'])) {
            $model->destGroupName = $map['DestGroupName'];
        }
        if (isset($map['DestPortRange'])) {
            $model->destPortRange = $map['DestPortRange'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['InnerAccessPolicy'])) {
            $model->innerAccessPolicy = $map['InnerAccessPolicy'];
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
        if (isset($map['PermissionDescription'])) {
            $model->permissionDescription = $map['PermissionDescription'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
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
