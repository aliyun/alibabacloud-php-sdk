<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class Image extends Model
{
    /**
     * @description 资源类型
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description 镜像作者
     *
     * @var string
     */
    public $author;

    /**
     * @description Cuda版本
     *
     * @var string
     */
    public $cudaVersion;

    /**
     * @description 镜像描述
     *
     * @var string
     */
    public $description;

    /**
     * @description Ecs镜像key
     *
     * @var string
     */
    public $ecsImageKey;

    /**
     * @description 算法框架
     *
     * @var string
     */
    public $framework;

    /**
     * @description 算法框架版本
     *
     * @var string
     */
    public $frameworkVersion;

    /**
     * @description 镜像父镜像
     *
     * @var string
     */
    public $fromImageId;

    /**
     * @description 镜像名称
     *
     * @var string
     */
    public $fromImageName;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 镜像ID
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像名称
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 镜像url
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 镜像命名空间
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 镜像操作系统分发版
     *
     * @var string
     */
    public $OS;

    /**
     * @description 分发版版本
     *
     * @var string
     */
    public $OSVersion;

    /**
     * @description python版本
     *
     * @var string
     */
    public $pythonVersion;

    /**
     * @description 地区
     *
     * @var string
     */
    public $region;

    /**
     * @description 镜像仓库
     *
     * @var string
     */
    public $repository;

    /**
     * @description 跳转的镜像站点页面
     *
     * @var string
     */
    public $repositoryPage;

    /**
     * @description 资源类型
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description 镜像的根镜像
     *
     * @var string
     */
    public $rootImageId;

    /**
     * @description 镜像是否被其他实例共享
     *
     * @var bool
     */
    public $shared;

    /**
     * @description 镜像短url
     *
     * @var string
     */
    public $shortImageUrl;

    /**
     * @description 镜像仓库短名称
     *
     * @var string
     */
    public $shortRepository;

    /**
     * @description 镜像状态
     *
     * @var string
     */
    public $stage;

    /**
     * @description 镜像状态代码
     *
     * @var int
     */
    public $stageCode;

    /**
     * @description 保存镜像建议的名称
     *
     * @var string
     */
    public $suggestedName;

    /**
     * @description Tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description 镜像类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 工作空间镜像id
     *
     * @var string
     */
    public $workspaceImageId;
    protected $_name = [
        'acceleratorType'  => 'AcceleratorType',
        'author'           => 'Author',
        'cudaVersion'      => 'CudaVersion',
        'description'      => 'Description',
        'ecsImageKey'      => 'EcsImageKey',
        'framework'        => 'Framework',
        'frameworkVersion' => 'FrameworkVersion',
        'fromImageId'      => 'FromImageId',
        'fromImageName'    => 'FromImageName',
        'gmtCreateTime'    => 'GmtCreateTime',
        'gmtModifiedTime'  => 'GmtModifiedTime',
        'imageId'          => 'ImageId',
        'imageName'        => 'ImageName',
        'imageUrl'         => 'ImageUrl',
        'instanceId'       => 'InstanceId',
        'namespace'        => 'Namespace',
        'OS'               => 'OS',
        'OSVersion'        => 'OSVersion',
        'pythonVersion'    => 'PythonVersion',
        'region'           => 'Region',
        'repository'       => 'Repository',
        'repositoryPage'   => 'RepositoryPage',
        'resourceType'     => 'ResourceType',
        'rootImageId'      => 'RootImageId',
        'shared'           => 'Shared',
        'shortImageUrl'    => 'ShortImageUrl',
        'shortRepository'  => 'ShortRepository',
        'stage'            => 'Stage',
        'stageCode'        => 'StageCode',
        'suggestedName'    => 'SuggestedName',
        'tag'              => 'Tag',
        'type'             => 'Type',
        'workspaceImageId' => 'WorkspaceImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->cudaVersion) {
            $res['CudaVersion'] = $this->cudaVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsImageKey) {
            $res['EcsImageKey'] = $this->ecsImageKey;
        }
        if (null !== $this->framework) {
            $res['Framework'] = $this->framework;
        }
        if (null !== $this->frameworkVersion) {
            $res['FrameworkVersion'] = $this->frameworkVersion;
        }
        if (null !== $this->fromImageId) {
            $res['FromImageId'] = $this->fromImageId;
        }
        if (null !== $this->fromImageName) {
            $res['FromImageName'] = $this->fromImageName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->OS) {
            $res['OS'] = $this->OS;
        }
        if (null !== $this->OSVersion) {
            $res['OSVersion'] = $this->OSVersion;
        }
        if (null !== $this->pythonVersion) {
            $res['PythonVersion'] = $this->pythonVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }
        if (null !== $this->repositoryPage) {
            $res['RepositoryPage'] = $this->repositoryPage;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->rootImageId) {
            $res['RootImageId'] = $this->rootImageId;
        }
        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }
        if (null !== $this->shortImageUrl) {
            $res['ShortImageUrl'] = $this->shortImageUrl;
        }
        if (null !== $this->shortRepository) {
            $res['ShortRepository'] = $this->shortRepository;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->stageCode) {
            $res['StageCode'] = $this->stageCode;
        }
        if (null !== $this->suggestedName) {
            $res['SuggestedName'] = $this->suggestedName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workspaceImageId) {
            $res['WorkspaceImageId'] = $this->workspaceImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['CudaVersion'])) {
            $model->cudaVersion = $map['CudaVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsImageKey'])) {
            $model->ecsImageKey = $map['EcsImageKey'];
        }
        if (isset($map['Framework'])) {
            $model->framework = $map['Framework'];
        }
        if (isset($map['FrameworkVersion'])) {
            $model->frameworkVersion = $map['FrameworkVersion'];
        }
        if (isset($map['FromImageId'])) {
            $model->fromImageId = $map['FromImageId'];
        }
        if (isset($map['FromImageName'])) {
            $model->fromImageName = $map['FromImageName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OS'])) {
            $model->OS = $map['OS'];
        }
        if (isset($map['OSVersion'])) {
            $model->OSVersion = $map['OSVersion'];
        }
        if (isset($map['PythonVersion'])) {
            $model->pythonVersion = $map['PythonVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }
        if (isset($map['RepositoryPage'])) {
            $model->repositoryPage = $map['RepositoryPage'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RootImageId'])) {
            $model->rootImageId = $map['RootImageId'];
        }
        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }
        if (isset($map['ShortImageUrl'])) {
            $model->shortImageUrl = $map['ShortImageUrl'];
        }
        if (isset($map['ShortRepository'])) {
            $model->shortRepository = $map['ShortRepository'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['StageCode'])) {
            $model->stageCode = $map['StageCode'];
        }
        if (isset($map['SuggestedName'])) {
            $model->suggestedName = $map['SuggestedName'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkspaceImageId'])) {
            $model->workspaceImageId = $map['WorkspaceImageId'];
        }

        return $model;
    }
}
