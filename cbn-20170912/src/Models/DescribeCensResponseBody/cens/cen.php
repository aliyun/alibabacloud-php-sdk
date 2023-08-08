<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen\cenBandwidthPackageIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen\tags;
use AlibabaCloud\Tea\Model;

class cen extends Model
{
    /**
     * @var cenBandwidthPackageIds
     */
    public $cenBandwidthPackageIds;

    /**
     * @description The filter condition. Valid values:
     *
     *   **CenId**: the ID of a CEN instance.
     *   **Name**: the name of a CEN instance.
     *
     * By default, the logical operator among filter conditions is **AND**. Information about a CEN instance is returned only if the CEN instance matches all filter conditions.
     *
     * You can specify at most five filter conditions in each call.
     * @example cen-0xyeagctz5sfg9****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The tags.
     *
     * @example 2019-10-22T07:44Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The number of entries returned per page.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of the page returned.
     *
     * @example DISABLED
     *
     * @var string
     */
    public $ipv6Level;

    /**
     * @description The ID of the CEN instance.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example REDUCED
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The values of the filter condition.
     *
     * @example rg-acfm3unpnuw****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether IPv6 is enabled for the CEN instance.
     *
     *   **ENABLE**: enabled
     *   **DISABLED**: disabled
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag keys of the resources.
     *
     * You can specify at most 20 tag keys.
     * @var tags
     */
    public $tags;
    protected $_name = [
        'cenBandwidthPackageIds' => 'CenBandwidthPackageIds',
        'cenId'                  => 'CenId',
        'creationTime'           => 'CreationTime',
        'description'            => 'Description',
        'ipv6Level'              => 'Ipv6Level',
        'name'                   => 'Name',
        'protectionLevel'        => 'ProtectionLevel',
        'resourceGroupId'        => 'ResourceGroupId',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenBandwidthPackageIds) {
            $res['CenBandwidthPackageIds'] = null !== $this->cenBandwidthPackageIds ? $this->cenBandwidthPackageIds->toMap() : null;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cen
     */
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
