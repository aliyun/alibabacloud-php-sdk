<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageVulListRequest extends Model
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
     * @description The ID of the cluster to which the container belongs.
     *
     * @example cc20a1024011c44b6a8710d6f8b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example docker-law
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The ID of the container.
     *
     * @example c08d5fc1a329a4b88950a253d082f****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The number of the page to return. Default value: **1**
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the vulnerability is handled. Valid values:
     *
     *   **y**: handled
     *   **n**: unhandled
     *
     * @example y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The digest of the image.
     *
     * @example 8f0fbdb41d3d1ade4ffdf21558443f4c03342010563bb8c43ccc09594d507012
     *
     * @var string
     */
    public $digest;

    /**
     * @description The name of the image.
     *
     * @example registry.cn-wulanchabu.aliyuncs.com/sas_test/huxin-test-001:nuxeo6-****
     *
     * @var string
     */
    public $image;

    /**
     * @description The instance ID of the asset.
     *
     * @example 1-qeqewqw****
     *
     * @var string
     */
    public $instanceId;

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
     * @description The namespace.
     *
     * @example test-002
     *
     * @var string
     */
    public $namespace;

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
     * @description The number of entries to return on each page. Default value: **10**
     *
     * @example 10
     *
     * @var int
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
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: unfixed
     *   **4**: being fixed
     *   **7**: fixed
     *
     * @example 1
     *
     * @var string
     */
    public $statusList;

    /**
     * @description The tag that is added to the image.
     *
     * @example oval
     *
     * @var string
     */
    public $tag;

    /**
     * @description The type of the vulnerability. Set the value to **cve**, which indicates image vulnerabilities.
     *
     * This parameter is required.
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUIDs of the assets. Separate multiple UUIDs with commas (,).
     *
     * @example 0004a32a0305a7f6ab5ff9600d47****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliasName'      => 'AliasName',
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'containerId'    => 'ContainerId',
        'currentPage'    => 'CurrentPage',
        'dealed'         => 'Dealed',
        'digest'         => 'Digest',
        'image'          => 'Image',
        'instanceId'     => 'InstanceId',
        'lang'           => 'Lang',
        'name'           => 'Name',
        'namespace'      => 'Namespace',
        'necessity'      => 'Necessity',
        'pageSize'       => 'PageSize',
        'pod'            => 'Pod',
        'regionId'       => 'RegionId',
        'repoId'         => 'RepoId',
        'repoInstanceId' => 'RepoInstanceId',
        'repoName'       => 'RepoName',
        'repoNamespace'  => 'RepoNamespace',
        'repoRegionId'   => 'RepoRegionId',
        'scanRange'      => 'ScanRange',
        'statusList'     => 'StatusList',
        'tag'            => 'Tag',
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
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
     * @return DescribeImageVulListRequest
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
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
