<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponseBody\onceTasks;

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
     * @example {"scaVul":"2023-09-04 09:37:21","identificationInfo":"2023-09-04 09:37:30","forbiddenPackageInfo":"2023-09-04 09:37:16","binary":"2023-09-04 09:37:25","baseline":"2023-09-04 09:37:19","sensitiveFile":"2023-09-04 09:38:34","vul":"2023-09-04 09:37:31","webshell":"2023-09-04 09:38:27","sensitiveInfo":"2023-09-04 09:37:16","script":"2023-09-04 09:39:44"}
     *
     * @var string
     */
    public $costTimeInfo;

    /**
     * @description The digest of the image.
     *
     * @example 9e0dc29d872d2e386cc5c0c92b529a84e3acfade16f5cb1d054a2ee3c99****
     *
     * @var string
     */
    public $digest;

    /**
     * @description The image of the container.
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
     * @description The name of the namespace to which the image repository belongs.
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
     * @description The tag that is added to the image.
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
        'costTimeInfo'   => 'CostTimeInfo',
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
        if (null !== $this->costTimeInfo) {
            $res['CostTimeInfo'] = $this->costTimeInfo;
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
        if (isset($map['CostTimeInfo'])) {
            $model->costTimeInfo = $map['CostTimeInfo'];
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
