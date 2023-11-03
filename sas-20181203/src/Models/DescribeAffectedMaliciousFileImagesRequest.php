<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAffectedMaliciousFileImagesRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example c60b77fe62093480db6164a3c2fa5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example minikube
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The ID of the container.
     *
     * @example cc20a1024011c44b6a8710d6f8b****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the container image.
     *
     * @example registry.cn-wulanchabu.aliyuncs.com/sas_test/huxin-test-001:nuxeo6-****
     *
     * @var string
     */
    public $image;

    /**
     * @description The image digest.
     *
     * @example 6a5e103187b31a94592a47a5858617f7a179ead61df7606****
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @description The image layer.
     *
     * @example 27213ad375b53628dd152a5ca****
     *
     * @var string
     */
    public $imageLayer;

    /**
     * @description The tag that is added to the image.
     *
     * @example 0.2
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The severity. Separate multiple severities with commas (,). Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious,suspicious
     *
     * @var string
     */
    public $levels;

    /**
     * @description The MD5 hash value of the malicious image sample.
     *
     * >  You can call the [DescribeGroupedMaliciousFiles](~~DescribeGroupedMaliciousFiles~~) operation to query the MD5 hash values of malicious image samples.
     * @example d836968041f7683b5459****
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @description The namespace.
     *
     * @example test-002
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The pod.
     *
     * @example 22222-7xsqq
     *
     * @var string
     */
    public $pod;

    /**
     * @description The ID of the image repository.
     *
     * >  You can call the [ListRepository](~~451339~~) operation to query the IDs of image repositories from the value of the **RepoId** response parameter.
     * @example crr-vridcl4****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the container image.
     *
     * >  You can call the [ListRepository](~~451339~~) operation to query the IDs of container images from the value of the **InstanceId** response parameter.
     * @example cri-datvailb****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The name of the image repository.
     *
     * >  Fuzzy match is supported.
     * @example centos
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * >  Fuzzy match is supported.
     * @example hanghai-namespace
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The region ID of the image repository. Valid values:
     *
     *   **cn-beijing**: China (Beijing)
     *   **cn-zhangjiakou**: China (Zhangjiakou)
     *   **cn-hangzhou**: China (Hangzhou)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **cn-hongkong**: China (Hong Kong)
     *   **ap-southeast-1**: Singapore
     *   **ap-southeast-5**: Indonesia (Jakarta)
     *   **us-east-1**: US (Virginia)
     *   **us-west-1**: US (Silicon Valley)
     *   **eu-central-1**: Germany (Frankfurt)
     *   **eu-west-1**: UK (London)
     *   **ap-south-1**: India (Mumbai)
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $repoRegionId;

    /**
     * @description The types of the assets that you want to scan.
     *
     * @var string[]
     */
    public $scanRange;

    /**
     * @description 镜像恶意样本处理状态。取值：
     * - **0**：未处理
     * - **1**：已处理
     * - **2**：验证中
     * - **3**：已加白
     * @example 0
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'containerId'    => 'ContainerId',
        'currentPage'    => 'CurrentPage',
        'image'          => 'Image',
        'imageDigest'    => 'ImageDigest',
        'imageLayer'     => 'ImageLayer',
        'imageTag'       => 'ImageTag',
        'lang'           => 'Lang',
        'levels'         => 'Levels',
        'maliciousMd5'   => 'MaliciousMd5',
        'namespace'      => 'Namespace',
        'pageSize'       => 'PageSize',
        'pod'            => 'Pod',
        'repoId'         => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'repoRegionId'   => 'RepoRegionId',
        'scanRange'      => 'ScanRange',
        'status'         => 'Status',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->imageLayer) {
            $res['ImageLayer'] = $this->imageLayer;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
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
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAffectedMaliciousFileImagesRequest
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['ImageLayer'])) {
            $model->imageLayer = $map['ImageLayer'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
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
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
