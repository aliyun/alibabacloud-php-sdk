<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic.
     *
     * Valid values:
     *
     * - **accept**: allows the traffic.
     * - **drop**: denies the traffic.
     * - **log**: monitors the traffic.
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The ID of the access control policy.
     *
     * If you want to modify the configurations of an access control policy, you must provide the ID of the policy. You can call the [DescribeVpcFirewallControlPolicy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/describevpcfirewallcontrolpolicy#doc-api-Cloudfw-DescribeVpcFirewallControlPolicy) operation to query the ID.
     * @example 00281255-d220-4db1-8f4f-c4df221a****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The type of the application that the access control policy supports.
     *
     * - ANY: all types of applications
     * @example HTTP
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The description of the access control policy.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination port in the access control policy.
     *
     * @example 80
     *
     * @var string
     */
    public $destPort;

    /**
     * @description The name of the destination port address book in the access control policy.
     *
     * @example my_port_group
     *
     * @var string
     */
    public $destPortGroup;

    /**
     * @description The type of the destination port in the access control policy.
     *
     * - **port**: port
     * - **group**: port address book
     * @example port
     *
     * @var string
     */
    public $destPortType;

    /**
     * @description The destination address in the access control policy.
     *
     * - If **DestinationType** is set to `net`, the value of Destination is a CIDR block.
     *
     * Example: 10.2.3.0/24
     * - If **DestinationType** is set to `group`, the value of Destination is an address book.
     *
     * Example: db_group
     * - If **DestinationType** is set to `domain`, the value of Destination is a domain name.
     *
     * Example: *.aliyuncs.com
     * @example 10.2.X.X/XX
     *
     * @var string
     */
    public $destination;

    /**
     * @description The type of the destination address in the access control policy.
     *
     * Valid values:
     *
     * - **net**: destination CIDR block
     * - **group**: destination address book
     * - **domain**: destination domain name
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The natural language of the request and response.
     *
     * Valid values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the protocol in the access control policy.
     *
     * - ICMP
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description Indicates whether the access control policy is enabled. By default, an access control policy is enabled after it is created. Valid values:
     *
     * - **true**: The access control policy is enabled.
     * - **false**: The access control policy is disabled.
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The source address in the access control policy.
     *
     * Valid values:
     *
     * - If **SourceType** is set to `net`, the value of Source is a CIDR block.
     *
     * Example: 10.2.4.0/24
     * - If **SourceType** is set to `group`, the value of Source is an address book.
     *
     * Example: db_group
     * @example 10.2.X.X/XX
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the source address in the access control policy.
     *
     * Valid values:
     *
     * - **net**: source CIDR block
     * - **group**: source address book
     * @example net
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the policy group to which the access control policy belongs. You can call the DescribeVpcFirewallAclGroupList operation to query the ID.
     *
     * - If the VPC firewall is used to protect a CEN instance, the value of this parameter is the ID of the CEN instance.
     *
     * Example: cen-ervw0g12b5jbw****
     * - If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter is the instance ID of the VPC firewall.
     *
     * Example: vfw-a42bbb7b887148c9****
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclAction'       => 'AclAction',
        'aclUuid'         => 'AclUuid',
        'applicationName' => 'ApplicationName',
        'description'     => 'Description',
        'destPort'        => 'DestPort',
        'destPortGroup'   => 'DestPortGroup',
        'destPortType'    => 'DestPortType',
        'destination'     => 'Destination',
        'destinationType' => 'DestinationType',
        'lang'            => 'Lang',
        'proto'           => 'Proto',
        'release'         => 'Release',
        'source'          => 'Source',
        'sourceType'      => 'SourceType',
        'vpcFirewallId'   => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }
        if (null !== $this->destPortGroup) {
            $res['DestPortGroup'] = $this->destPortGroup;
        }
        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }
        if (isset($map['DestPortGroup'])) {
            $model->destPortGroup = $map['DestPortGroup'];
        }
        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
