<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords\extendContentJson;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @example CVE-2018-25010:libwebp up to 1.0.0 ApplyFilter out-of-bounds read
     *
     * @var string
     */
    public $aliasName;

    /**
     * @example yes
     *
     * @var string
     */
    public $canFix;

    /**
     * @example true
     *
     * @var bool
     */
    public $canUpdate;

    /**
     * @example c08d5fc1a329a4b88950a253d082f1****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example docker-law
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 04d20e98c8e2c93b7b864372084320a15a58c8671e53c972ce3a71d9c163****
     *
     * @var string
     */
    public $containerId;

    /**
     * @var extendContentJson
     */
    public $extendContentJson;

    /**
     * @example 1620752053000
     *
     * @var int
     */
    public $firstTs;

    /**
     * @example registry.cn-wulanchabu.aliyuncs.com/sas_test/huxin-test-001:nuxeo6-conta****
     *
     * @var string
     */
    public $image;

    /**
     * @example 8f0fbdb41d3d1ade4ffdf21558443f4c03342010563bb8c43ccc09594d50****
     *
     * @var string
     */
    public $imageDigest;

    /**
     * @example testInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.19.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 1620404763000
     *
     * @var int
     */
    public $lastTs;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @example agentless
     *
     * @var string
     */
    public $maliciousSource;

    /**
     * @example 1620404763000
     *
     * @var int
     */
    public $modifyTs;

    /**
     * @example debian:10:CVE-2019-9893
     *
     * @var string
     */
    public $name;

    /**
     * @example test-002
     *
     * @var string
     */
    public $namespace;

    /**
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @example 22222-7xsqq
     *
     * @var string
     */
    public $pod;

    /**
     * @example 782661
     *
     * @var int
     */
    public $primaryId;

    /**
     * @example CVE-2017-7518,CVE-2017-12188
     *
     * @var string
     */
    public $related;

    /**
     * @example varnish
     *
     * @var string
     */
    public $repoName;

    /**
     * @example 3rdparty
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @example 1649814050000
     *
     * @var int
     */
    public $scanTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example latest
     *
     * @var string
     */
    public $tag;

    /**
     * @example 300269
     *
     * @var string
     */
    public $targetId;

    /**
     * @example source-test-obj-XM0Ma
     *
     * @var string
     */
    public $targetName;

    /**
     * @example ECS_IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @example 0004a32a0305a7f6ab5ff9600d47****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName'         => 'AliasName',
        'canFix'            => 'CanFix',
        'canUpdate'         => 'CanUpdate',
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'containerId'       => 'ContainerId',
        'extendContentJson' => 'ExtendContentJson',
        'firstTs'           => 'FirstTs',
        'image'             => 'Image',
        'imageDigest'       => 'ImageDigest',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'lastTs'            => 'LastTs',
        'layers'            => 'Layers',
        'maliciousSource'   => 'MaliciousSource',
        'modifyTs'          => 'ModifyTs',
        'name'              => 'Name',
        'namespace'         => 'Namespace',
        'necessity'         => 'Necessity',
        'pod'               => 'Pod',
        'primaryId'         => 'PrimaryId',
        'related'           => 'Related',
        'repoName'          => 'RepoName',
        'repoNamespace'     => 'RepoNamespace',
        'scanTime'          => 'ScanTime',
        'status'            => 'Status',
        'tag'               => 'Tag',
        'targetId'          => 'TargetId',
        'targetName'        => 'TargetName',
        'targetType'        => 'TargetType',
        'type'              => 'Type',
        'uuid'              => 'Uuid',
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
        if (null !== $this->canFix) {
            $res['CanFix'] = $this->canFix;
        }
        if (null !== $this->canUpdate) {
            $res['CanUpdate'] = $this->canUpdate;
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
        if (null !== $this->extendContentJson) {
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toMap() : null;
        }
        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->layers) {
            $res['Layers'] = $this->layers;
        }
        if (null !== $this->maliciousSource) {
            $res['MaliciousSource'] = $this->maliciousSource;
        }
        if (null !== $this->modifyTs) {
            $res['ModifyTs'] = $this->modifyTs;
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
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->scanTime) {
            $res['ScanTime'] = $this->scanTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['CanFix'])) {
            $model->canFix = $map['CanFix'];
        }
        if (isset($map['CanUpdate'])) {
            $model->canUpdate = $map['CanUpdate'];
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
        if (isset($map['ExtendContentJson'])) {
            $model->extendContentJson = extendContentJson::fromMap($map['ExtendContentJson']);
        }
        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['Layers'])) {
            if (!empty($map['Layers'])) {
                $model->layers = $map['Layers'];
            }
        }
        if (isset($map['MaliciousSource'])) {
            $model->maliciousSource = $map['MaliciousSource'];
        }
        if (isset($map['ModifyTs'])) {
            $model->modifyTs = $map['ModifyTs'];
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
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['ScanTime'])) {
            $model->scanTime = $map['ScanTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
