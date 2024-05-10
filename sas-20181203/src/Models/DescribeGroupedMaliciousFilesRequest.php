<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedMaliciousFilesRequest extends Model
{
    /**
     * @description The cluster ID of the container on which the malicious image sample is detected.
     *
     * @example c556c8133b5ad4378b7fc533ddbda****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the malicious image sample that you want to query.
     *
     * >  Fuzzy match is supported.
     * @example Mining
     *
     * @var string
     */
    public $fuzzyMaliciousName;

    /**
     * @description The image digest.
     *
     * @example 6a5e103187b31a94592a47a5858617f7****
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
     * @description The image tag.
     *
     * @example 0.2
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
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
     * @description The severity of the malicious image sample that you want to query. You can enter multiple severities. Separate the severities with commas (,). Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $levels;

    /**
     * @description The MD5 hash value of the malicious image sample.
     *
     * @example d836968041f7683b5459****
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * This parameter is required.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the image repository.
     *
     * >  You can call the [ListRepository](https://help.aliyun.com/document_detail/145293.html) operation to query the IDs of image repositories from the value of the **RepoId** response parameter.
     * @example crr-vridcl4****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the container image.
     *
     * >  You can call the [ListRepository](https://help.aliyun.com/document_detail/145293.html) operation to query the IDs of container images from the value of the **InstanceId** response parameter.
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
     * @example cn-shanghai
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
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'currentPage'        => 'CurrentPage',
        'fuzzyMaliciousName' => 'FuzzyMaliciousName',
        'imageDigest'        => 'ImageDigest',
        'imageLayer'         => 'ImageLayer',
        'imageTag'           => 'ImageTag',
        'lang'               => 'Lang',
        'levels'             => 'Levels',
        'maliciousMd5'       => 'MaliciousMd5',
        'pageSize'           => 'PageSize',
        'repoId'             => 'RepoId',
        'repoInstanceId'     => 'RepoInstanceId',
        'repoName'           => 'RepoName',
        'repoNamespace'      => 'RepoNamespace',
        'repoRegionId'       => 'RepoRegionId',
        'scanRange'          => 'ScanRange',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fuzzyMaliciousName) {
            $res['FuzzyMaliciousName'] = $this->fuzzyMaliciousName;
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedMaliciousFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FuzzyMaliciousName'])) {
            $model->fuzzyMaliciousName = $map['FuzzyMaliciousName'];
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
