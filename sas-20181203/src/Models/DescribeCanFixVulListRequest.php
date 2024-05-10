<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCanFixVulListRequest extends Model
{
    /**
     * @description The alias of the vulnerability that is specified in Common Vulnerabilities and Exposures (CVE).
     *
     * @example RHSA-2017:0184-Important: mysql security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The cluster ID.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example c80f79959fd724a888e1187779b13****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example sas-test-cnnf
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The container ID.
     *
     * @example 48a6d9a92435a13ad573372c3f3c63b7e04d106458141df9f92155709d5a****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the vulnerability is handled. Valid values:
     *
     **y**: The vulnerability is handled. **n**: The vulnerability is not handled.
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The unique identifier of the image.
     *
     * @example 8f0fbdb41d3d1ade4ffdf21558443f4c03342010563bb8c43ccc09594d50****
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
     * @description The ID of the container image.
     *
     * >  You can call the [ListRepository](https://help.aliyun.com/document_detail/451339.html) operation of Container Registry and obtain the ID of the container image from **InstanceId** in the response.
     * @example cri-rv4nvbv8iju4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the vulnerability.
     *
     * @example scan:AVD-2022-953356
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the cluster.
     *
     * >  You can call the [GetOpaClusterNamespaceList](~~GetOpaClusterNamespaceList~~) operation to query the namespaces of clusters.
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The priority to fix the vulnerability. Separate multiple priorities with commas (,). Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the container group.
     *
     * @example 22222-7xsqq
     *
     * @var string
     */
    public $pod;

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
    public $regionId;

    /**
     * @description The ID of the image repository.
     *
     * >  You can call the [ListRepository](https://help.aliyun.com/document_detail/145293.html) operation of Container Registry and obtain the ID of the image repository from **RepoId** in the response.
     * @example crr-avo7qp02simz2njo
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the container image.
     *
     * >  You can call the [ListRepository](https://help.aliyun.com/document_detail/451339.html) operation of Container Registry and obtain the ID of the container image from **InstanceId** in the response.
     * @example cri-rv4nvbv8iju4****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The name of the image repository.
     *
     * >  Fuzzy match is supported.
     * @example digital-account
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * >  Fuzzy match is supported.
     * @example ns-digital-dev
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
     * @description The type of the asset that you want to scan. Valid values:
     *
     *   **image**
     *   **container**
     *
     * @var string[]
     */
    public $scanRange;

    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: The vulnerability is unfixed.
     *   **4**: The vulnerability is being fixed.
     *   **7**:The vulnerability is fixed.
     *
     * @example 1
     *
     * @var string
     */
    public $statusList;

    /**
     * @description The tag to add to the image.
     *
     * @example 0.1.0
     *
     * @var string
     */
    public $tag;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: system vulnerability
     *   **sca**: application vulnerability
     *
     * This parameter is required.
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the image. Separate multiple UUIDs with commas (,).
     *
     * @example d15df12472809c1c3b158606c0f1****
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
     * @return DescribeCanFixVulListRequest
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
