<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBucketCachesResponseBody\bucketCaches;

use AlibabaCloud\Tea\Model;

class bucketCache extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $cacheMode;

    /**
     * @var string
     */
    public $cacheStats;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $mountPoint;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcCidr;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bucketName'  => 'BucketName',
        'cacheMode'   => 'CacheMode',
        'cacheStats'  => 'CacheStats',
        'category'    => 'Category',
        'gatewayId'   => 'GatewayId',
        'gatewayName' => 'GatewayName',
        'location'    => 'Location',
        'mountPoint'  => 'MountPoint',
        'protocol'    => 'Protocol',
        'regionId'    => 'RegionId',
        'shareName'   => 'ShareName',
        'type'        => 'Type',
        'vpcCidr'     => 'VpcCidr',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->cacheMode) {
            $res['CacheMode'] = $this->cacheMode;
        }
        if (null !== $this->cacheStats) {
            $res['CacheStats'] = $this->cacheStats;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->mountPoint) {
            $res['MountPoint'] = $this->mountPoint;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->shareName) {
            $res['ShareName'] = $this->shareName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcCidr) {
            $res['VpcCidr'] = $this->vpcCidr;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketCache
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CacheMode'])) {
            $model->cacheMode = $map['CacheMode'];
        }
        if (isset($map['CacheStats'])) {
            $model->cacheStats = $map['CacheStats'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MountPoint'])) {
            $model->mountPoint = $map['MountPoint'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShareName'])) {
            $model->shareName = $map['ShareName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcCidr'])) {
            $model->vpcCidr = $map['VpcCidr'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
