<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnfinishedOnceTaskResponseBody\onceTasks;

use AlibabaCloud\Tea\Model;

class taskImageInfo extends Model
{
    /**
     * @example ack-jenkins-****
     *
     * @var string
     */
    public $appName;

    /**
     * @example a765ba1435e7f9446065370e9a41****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ACK-test-****
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example default_digest
     *
     * @var string
     */
    public $digest;

    /**
     * @example ***s.com/sas_test/baseli***
     *
     * @var string
     */
    public $image;

    /**
     * @example i-0xi5mxvtmfw9****
     *
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @example 172.18.XXX.XXX
     *
     * @var string
     */
    public $nodeIp;

    /**
     * @example pztest****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example expoit-law-****
     *
     * @var string
     */
    public $pod;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example crr-r88w2vryp8m****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example testyyy
     *
     * @var string
     */
    public $repoName;

    /**
     * @example bitn***
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $repoRegionId;

    /**
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
