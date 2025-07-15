<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\ingressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\resources;
use AlibabaCloud\Tea\Model;

class networkAclAttribute extends Model
{
    /**
     * @description The time when the network ACL was created.
     *
     * @example 2021-12-25 11:33:27
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
     * @description The inbound rules.
     *
     * @var ingressAclEntries
     */
    public $ingressAclEntries;

    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-a2do9e413e0spdefr****
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
     * @description The region ID of the network ACL.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The information about the associated resources.
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
     * @example Modifying
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC to which the network ACL belongs.
     *
     * @example vpc-a2d33rfpl72k5xsscd****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'egressAclEntries' => 'EgressAclEntries',
        'ingressAclEntries' => 'IngressAclEntries',
        'networkAclId' => 'NetworkAclId',
        'networkAclName' => 'NetworkAclName',
        'regionId' => 'RegionId',
        'resources' => 'Resources',
        'status' => 'Status',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
