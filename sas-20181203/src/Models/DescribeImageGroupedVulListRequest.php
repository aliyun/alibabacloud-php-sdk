<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageGroupedVulListRequest extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example High severity vulnerability that affects org.eclipse.jetty:jetty-server
     *
     * @var string
     */
    public $aliasName;

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
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The Common Vulnerabilities and Exposures (CVE) ID of the vulnerability.
     *
     * @example CVE-2017-15420
     *
     * @var string
     */
    public $cveId;

    /**
     * @description The ID of the asset group.
     *
     * @example 1311
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The SHA-256 value of the image digest.
     *
     * @example w213412341dfsfasdfafadfasfasf
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @description The layer of the image.
     *
     * @example b1f5b9420803ad0657cf21566e3e20acc08581e7f22991249ef3aa80b8b1c587
     *
     * @var string
     */
    public $imageLayer;

    /**
     * @description The tag that is added to the image.
     *
     * @example oval
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description Specifies whether to query the vulnerabilities in the latest images. If you do not specify this parameter, the vulnerabilities in all images are queried. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $isLatest;

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
     * @description The name of the vulnerability.
     *
     * @example debian:10:CVE-2019-9893
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority to fix the vulnerability. Valid values:
     *
     *   **asap**: high. You must fix the vulnerability at the earliest opportunity.
     *   **later**: medium. You can fix the vulnerability based on your business requirements.
     *   **nntf**: low. You can ignore the vulnerability.
     *
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the patch that is used to fix the vulnerability.
     *
     * @example 1341512412
     *
     * @var int
     */
    public $patchId;

    /**
     * @description The ID of the image repository.
     *
     * @example qew****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The instance ID of the image repository.
     *
     * @example i-qewqrqcsadf****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The name of the image repository.
     *
     * @example libssh2
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example libssh2
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
     * @description The types of the assets that you want to scan.
     *
     * @var string[]
     */
    public $scanRange;

    /**
     * @description The type of the vulnerability that you want to query. Valid values:
     *
     *   **cve**: image system vulnerability
     *   **sca**: image application vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUIDs of the assets. Separate multiple UUIDs with commas (,).
     *
     * @example uuid-13134124****
     *
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
        'scanRange'      => 'ScanRange',
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
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
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
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
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
