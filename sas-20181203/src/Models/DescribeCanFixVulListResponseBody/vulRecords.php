<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCanFixVulListResponseBody\vulRecords\extendContentJson;

class vulRecords extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $canFix;

    /**
     * @var bool
     */
    public $canUpdate;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var extendContentJson
     */
    public $extendContentJson;

    /**
     * @var int
     */
    public $firstTs;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $lastTs;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @var string
     */
    public $maliciousSource;

    /**
     * @var int
     */
    public $modifyTs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $related;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespace;

    /**
     * @var int
     */
    public $scanTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName' => 'AliasName',
        'canFix' => 'CanFix',
        'canUpdate' => 'CanUpdate',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'containerId' => 'ContainerId',
        'extendContentJson' => 'ExtendContentJson',
        'firstTs' => 'FirstTs',
        'image' => 'Image',
        'imageDigest' => 'ImageDigest',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'lastTs' => 'LastTs',
        'layers' => 'Layers',
        'maliciousSource' => 'MaliciousSource',
        'modifyTs' => 'ModifyTs',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'necessity' => 'Necessity',
        'pod' => 'Pod',
        'primaryId' => 'PrimaryId',
        'related' => 'Related',
        'repoName' => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
        'scanTime' => 'ScanTime',
        'status' => 'Status',
        'tag' => 'Tag',
        'targetId' => 'TargetId',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
        'type' => 'Type',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->extendContentJson) {
            $this->extendContentJson->validate();
        }
        if (\is_array($this->layers)) {
            Model::validateArray($this->layers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toArray($noStream) : $this->extendContentJson;
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
            if (\is_array($this->layers)) {
                $res['Layers'] = [];
                $n1 = 0;
                foreach ($this->layers as $item1) {
                    $res['Layers'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->layers = [];
                $n1 = 0;
                foreach ($map['Layers'] as $item1) {
                    $model->layers[$n1] = $item1;
                    ++$n1;
                }
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
