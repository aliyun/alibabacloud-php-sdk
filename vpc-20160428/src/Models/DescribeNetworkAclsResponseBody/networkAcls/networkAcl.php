<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl\ingressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl\resources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl\tags;
use AlibabaCloud\Tea\Model;

class networkAcl extends Model
{
    /**
     * @description The time when the network ACL was created.
     *
     * @example 2021-12-25 11:44:17
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the network ACL.
     *
     * @example This is my NetworkAcl.
     *
     * @var string
     */
    public $description;

    /**
     * @description The outbound rules.
     *
     * @var egressAclEntries
     */
    public $egressAclEntries;

    /**
     * @description The configurations of the inbound rules.
     *
     * @var ingressAclEntries
     */
    public $ingressAclEntries;

    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-a2do9e413e0spxscd****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The name of the network ACL.
     *
     * @example acl-1
     *
     * @var string
     */
    public $networkAclName;

    /**
     * @description The ID of the Alibaba Cloud account to which the network ACL belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the network ACL.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resources that are associated with the network ACL.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The status of the network ACL. Valid values:
     *
     *   **Available**
     *   **Modifying**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about the tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the associated VPC.
     *
     * @example vpc-m5ebpc2xh64mqm27e****
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
     * @return networkAcl
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
