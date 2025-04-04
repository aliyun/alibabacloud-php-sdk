<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\ingressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\resources;

class networkAclAttribute extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var egressAclEntries
     */
    public $egressAclEntries;

    /**
     * @var ingressAclEntries
     */
    public $ingressAclEntries;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $networkAclName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resources
     */
    public $resources;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        if (null !== $this->egressAclEntries) {
            $this->egressAclEntries->validate();
        }
        if (null !== $this->ingressAclEntries) {
            $this->ingressAclEntries->validate();
        }
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = null !== $this->egressAclEntries ? $this->egressAclEntries->toArray($noStream) : $this->egressAclEntries;
        }

        if (null !== $this->ingressAclEntries) {
            $res['IngressAclEntries'] = null !== $this->ingressAclEntries ? $this->ingressAclEntries->toArray($noStream) : $this->ingressAclEntries;
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
            $res['Resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
