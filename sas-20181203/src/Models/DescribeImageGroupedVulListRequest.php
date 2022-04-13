<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageGroupedVulListRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string
     */
    public $imageLayer;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var int
     */
    public $isLatest;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $patchId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $repoInstanceId;

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
    public $repoRegionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliasName'      => 'AliasName',
        'clusterId'      => 'ClusterId',
        'currentPage'    => 'CurrentPage',
        'cveId'          => 'CveId',
        'groupId'        => 'GroupId',
        'imageDigest'    => 'ImageDigest',
        'imageLayer'     => 'ImageLayer',
        'imageTag'       => 'ImageTag',
        'isLatest'       => 'IsLatest',
        'lang'           => 'Lang',
        'name'           => 'Name',
        'necessity'      => 'Necessity',
        'pageSize'       => 'PageSize',
        'patchId'        => 'PatchId',
        'repoId'         => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'repoRegionId'   => 'RepoRegionId',
        'type'           => 'Type',
        'uuids'          => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->isLatest) {
            $res['IsLatest'] = $this->isLatest;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->patchId) {
            $res['PatchId'] = $this->patchId;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageGroupedVulListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['IsLatest'])) {
            $model->isLatest = $map['IsLatest'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PatchId'])) {
            $model->patchId = $map['PatchId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
