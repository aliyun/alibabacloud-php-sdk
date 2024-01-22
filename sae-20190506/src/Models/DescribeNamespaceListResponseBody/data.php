<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespaceListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The command that was run to install the agent.
     *
     * @example http://edas-bj.oss-cn-beijing-internal.aliyuncs.com/test/install.sh
     *
     * @var string
     */
    public $agentInstall;

    /**
     * @description This parameter is no longer valid.
     *
     * @example false
     *
     * @var bool
     */
    public $current;

    /**
     * @description Indicates whether custom namespaces are returned. Valid values:
     *
     *   **true**: Custom namespaces are returned.
     *   **false**: Custom namespaces are not returned.
     *
     * @example true
     *
     * @var bool
     */
    public $custom;

    /**
     * @description Specifies whether hybrid cloud namespaces are excluded. Valid values:
     *
     *   **true**: Hybrid cloud namespaces are excluded.
     *   **false**: Hybrid cloud namespaces are included.
     *
     * @example false
     *
     * @var bool
     */
    public $hybridCloudEnable;

    /**
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description The ID of the namespace.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The region to which the namespace belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-wz969ngg2e49q5i4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-2ze559r1z1bpwqxwp****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2ze0i263cnn311nvj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentInstall'      => 'AgentInstall',
        'current'           => 'Current',
        'custom'            => 'Custom',
        'hybridCloudEnable' => 'HybridCloudEnable',
        'nameSpaceShortId'  => 'NameSpaceShortId',
        'namespaceId'       => 'NamespaceId',
        'namespaceName'     => 'NamespaceName',
        'regionId'          => 'RegionId',
        'securityGroupId'   => 'SecurityGroupId',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentInstall) {
            $res['AgentInstall'] = $this->agentInstall;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
        }
        if (null !== $this->hybridCloudEnable) {
            $res['HybridCloudEnable'] = $this->hybridCloudEnable;
        }
        if (null !== $this->nameSpaceShortId) {
            $res['NameSpaceShortId'] = $this->nameSpaceShortId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentInstall'])) {
            $model->agentInstall = $map['AgentInstall'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
        }
        if (isset($map['HybridCloudEnable'])) {
            $model->hybridCloudEnable = $map['HybridCloudEnable'];
        }
        if (isset($map['NameSpaceShortId'])) {
            $model->nameSpaceShortId = $map['NameSpaceShortId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
