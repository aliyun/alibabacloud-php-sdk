<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen\cenBandwidthPackageIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen\tags;

class cen extends Model
{
    /**
     * @var cenBandwidthPackageIds
     */
    public $cenBandwidthPackageIds;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipv6Level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'cenBandwidthPackageIds' => 'CenBandwidthPackageIds',
        'cenId' => 'CenId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ipv6Level' => 'Ipv6Level',
        'name' => 'Name',
        'protectionLevel' => 'ProtectionLevel',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->cenBandwidthPackageIds) {
            $this->cenBandwidthPackageIds->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenBandwidthPackageIds) {
            $res['CenBandwidthPackageIds'] = null !== $this->cenBandwidthPackageIds ? $this->cenBandwidthPackageIds->toArray($noStream) : $this->cenBandwidthPackageIds;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ipv6Level) {
            $res['Ipv6Level'] = $this->ipv6Level;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['CenBandwidthPackageIds'])) {
            $model->cenBandwidthPackageIds = cenBandwidthPackageIds::fromMap($map['CenBandwidthPackageIds']);
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Ipv6Level'])) {
            $model->ipv6Level = $map['Ipv6Level'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
