<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\ingressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\resources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\tags;
use AlibabaCloud\Tea\Model;

class networkAclAttribute extends Model
{
    /**
     * @description The ID of the outbound rule.
     *
     * @example 2021-12-25 11:33:27
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The name of the outbound rule.
     *
     * @example This is my NetworkAcl.
     *
     * @var string
     */
    public $description;

    /**
     * @var egressAclEntries
     */
    public $egressAclEntries;

    /**
     * @description The details about the resource that is associated with the network ACL.
     *
     * @var ingressAclEntries
     */
    public $ingressAclEntries;

    /**
     * @description The description of the outbound rule.
     *
     * @example nacl-a2do9e413e0spnhmj****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The action to be performed on network traffic that matches the rule. Valid values:
     *
     * - **accept**: allows network traffic.
     * - **drop**: blocks network traffic.
     * @example acl-1
     *
     * @var string
     */
    public $networkAclName;

    /**
     * @description The protocol. Valid values:
     *
     * - **icmp**: ICMP
     * - **gre**: GRE
     * - **tcp**: TCP
     * - **udp**: UDP
     * - **all**: all protocols
     * @example 253460731706911258
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The destination CIDR block.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var resources
     */
    public $resources;

    /**
     * @description The destination port range of the inbound traffic.
     *
     *   If **Protocol** of the inbound rule is set to **all**, **icmp**, or **gre**, the port range is **-1/-1**, which indicates all ports.
     *   If **Protocol** of the inbound rule is set to **tcp** or **udp**, the port range is in the following format: **1/200** or **80/80**, which indicates port 1 to port 200, or port 80. Valid values for a port: **1** to **65535**.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @description The information about the outbound rules of the network ACL.
     *
     * @example vpc-a2d33rfpl72k5defr****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'description'       => 'Description',
        'egressAclEntries'  => 'EgressAclEntries',
        'ingressAclEntries' => 'IngressAclEntries',
        'networkAclId'      => 'NetworkAclId',
        'networkAclName'    => 'NetworkAclName',
        'ownerId'           => 'OwnerId',
        'regionId'          => 'RegionId',
        'resources'         => 'Resources',
        'status'            => 'Status',
        'tags'              => 'Tags',
        'vpcId'             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = null !== $this->egressAclEntries ? $this->egressAclEntries->toMap() : null;
        }
        if (null !== $this->ingressAclEntries) {
            $res['IngressAclEntries'] = null !== $this->ingressAclEntries ? $this->ingressAclEntries->toMap() : null;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->networkAclName) {
            $res['NetworkAclName'] = $this->networkAclName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAclAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EgressAclEntries'])) {
            $model->egressAclEntries = egressAclEntries::fromMap($map['EgressAclEntries']);
        }
        if (isset($map['IngressAclEntries'])) {
            $model->ingressAclEntries = ingressAclEntries::fromMap($map['IngressAclEntries']);
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['NetworkAclName'])) {
            $model->networkAclName = $map['NetworkAclName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
