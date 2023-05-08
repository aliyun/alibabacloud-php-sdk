<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedMaliciousFilesRequest extends Model
{
    /**
     * @example c556c8133b5ad4378b7fc533ddbda****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example Mining
     *
     * @var string
     */
    public $fuzzyMaliciousName;

    /**
     * @example 6a5e103187b31a94592a47a5858617f7****
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @example 27213ad375b53628dd152a5ca****
     *
     * @var string
     */
    public $imageLayer;

    /**
     * @example 0.2
     *
     * @var string
     */
    public $imageTag;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example serious
     *
     * @var string
     */
    public $levels;

    /**
     * @example d836968041f7683b5459****
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example crr-vridcl4****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example cri-datvailb****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @example centos
     *
     * @var string
     */
    public $repoName;

    /**
     * @example hanghai-namespace
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $repoRegionId;

    /**
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
