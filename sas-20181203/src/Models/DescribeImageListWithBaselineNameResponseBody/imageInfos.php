<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameResponseBody;

use AlibabaCloud\Tea\Model;

class imageInfos extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $highRiskImage;

    /**
     * @var string
     */
    public $image;

    /**
     * @var int
     */
    public $imageCreate;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $imageSize;

    /**
     * @var int
     */
    public $imageUpdate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lowRiskImage;

    /**
     * @var int
     */
    public $middleRiskImage;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $noRiskImage;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var string
     */
    public $riskStatus;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $totalItemCount;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterName'     => 'ClusterName',
        'containerId'     => 'ContainerId',
        'digest'          => 'Digest',
        'highRiskImage'   => 'HighRiskImage',
        'image'           => 'Image',
        'imageCreate'     => 'ImageCreate',
        'imageId'         => 'ImageId',
        'imageSize'       => 'ImageSize',
        'imageUpdate'     => 'ImageUpdate',
        'instanceId'      => 'InstanceId',
        'lowRiskImage'    => 'LowRiskImage',
        'middleRiskImage' => 'MiddleRiskImage',
        'namespace'       => 'Namespace',
        'noRiskImage'     => 'NoRiskImage',
        'pod'             => 'Pod',
        'regionId'        => 'RegionId',
        'repoId'          => 'RepoId',
        'repoName'        => 'RepoName',
        'repoNamespace'   => 'RepoNamespace',
        'repoType'        => 'RepoType',
        'riskStatus'      => 'RiskStatus',
        'tag'             => 'Tag',
        'totalItemCount'  => 'TotalItemCount',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->highRiskImage) {
            $res['HighRiskImage'] = $this->highRiskImage;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageCreate) {
            $res['ImageCreate'] = $this->imageCreate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageUpdate) {
            $res['ImageUpdate'] = $this->imageUpdate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lowRiskImage) {
            $res['LowRiskImage'] = $this->lowRiskImage;
        }
        if (null !== $this->middleRiskImage) {
            $res['MiddleRiskImage'] = $this->middleRiskImage;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->noRiskImage) {
            $res['NoRiskImage'] = $this->noRiskImage;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->totalItemCount) {
            $res['TotalItemCount'] = $this->totalItemCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['HighRiskImage'])) {
            $model->highRiskImage = $map['HighRiskImage'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageCreate'])) {
            $model->imageCreate = $map['ImageCreate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageUpdate'])) {
            $model->imageUpdate = $map['ImageUpdate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LowRiskImage'])) {
            $model->lowRiskImage = $map['LowRiskImage'];
        }
        if (isset($map['MiddleRiskImage'])) {
            $model->middleRiskImage = $map['MiddleRiskImage'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NoRiskImage'])) {
            $model->noRiskImage = $map['NoRiskImage'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TotalItemCount'])) {
            $model->totalItemCount = $map['TotalItemCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
