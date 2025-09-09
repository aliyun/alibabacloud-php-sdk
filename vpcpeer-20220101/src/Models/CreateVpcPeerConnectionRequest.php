<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\CreateVpcPeerConnectionRequest\tag;

class CreateVpcPeerConnectionRequest extends Model
{
    /**
     * @var int
     */
    public $acceptingAliUid;

    /**
     * @var string
     */
    public $acceptingRegionId;

    /**
     * @var string
     */
    public $acceptingVpcId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $linkType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptingAliUid' => 'AcceptingAliUid',
        'acceptingRegionId' => 'AcceptingRegionId',
        'acceptingVpcId' => 'AcceptingVpcId',
        'bandwidth' => 'Bandwidth',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'linkType' => 'LinkType',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptingAliUid) {
            $res['AcceptingAliUid'] = $this->acceptingAliUid;
        }

        if (null !== $this->acceptingRegionId) {
            $res['AcceptingRegionId'] = $this->acceptingRegionId;
        }

        if (null !== $this->acceptingVpcId) {
            $res['AcceptingVpcId'] = $this->acceptingVpcId;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->linkType) {
            $res['LinkType'] = $this->linkType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AcceptingAliUid'])) {
            $model->acceptingAliUid = $map['AcceptingAliUid'];
        }

        if (isset($map['AcceptingRegionId'])) {
            $model->acceptingRegionId = $map['AcceptingRegionId'];
        }

        if (isset($map['AcceptingVpcId'])) {
            $model->acceptingVpcId = $map['AcceptingVpcId'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['LinkType'])) {
            $model->linkType = $map['LinkType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
