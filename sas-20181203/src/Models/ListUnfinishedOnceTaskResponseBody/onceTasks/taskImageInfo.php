<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnfinishedOnceTaskResponseBody\onceTasks;

use AlibabaCloud\Tea\Model;

class taskImageInfo extends Model
{
    /**
     * @description The name of the application.
     *
     * @example ack-jenkins-****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the cluster.
     *
     * @example a765ba1435e7f9446065370e9a41****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example ACK-test-****
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The image digest.
     *
     * @example default_digest
     *
     * @var string
     */
    public $digest;

    /**
     * @description The container image.
     *
     * @example ***s.com/sas_test/baseli***
     *
     * @var string
     */
    public $image;

    /**
     * @description The instance ID of the node.
     *
     * @example i-0xi5mxvtmfw9****
     *
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @description The IP address of the node.
     *
     * @example 172.18.XXX.XXX
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @description The name of the node.
     *
     * @example pztest****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The pod of the image.
     *
     * @example expoit-law-****
     *
     * @var string
     */
    public $pod;

    /**
     * @description The region ID of the server image.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-r88w2vryp8m****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the image repository.
     *
     * @example testyyy
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example bitn***
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The region ID of the image repository.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @description The image tag.
     *
     * @example v1.20-002-a2*****
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'appName'        => 'AppName',
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'digest'         => 'Digest',
        'image'          => 'Image',
        'nodeInstanceId' => 'NodeInstanceId',
        'nodeIp'         => 'NodeIp',
        'nodeName'       => 'NodeName',
        'pod'            => 'Pod',
        'regionId'       => 'RegionId',
        'repoId'         => 'RepoId',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'repoRegionId'   => 'RepoRegionId',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskImageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
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
        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
