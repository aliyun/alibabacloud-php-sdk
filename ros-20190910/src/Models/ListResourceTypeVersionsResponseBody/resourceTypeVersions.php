<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceTypeVersions extends Model
{
    /**
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @example Module
     *
     * @var string
     */
    public $entityType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @example ROS
     *
     * @var string
     */
    public $provider;

    /**
     * @example MODULE::MyOrganization::MyService::MyUsecase
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example v1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'description'      => 'Description',
        'entityType'       => 'EntityType',
        'isDefaultVersion' => 'IsDefaultVersion',
        'provider'         => 'Provider',
        'resourceType'     => 'ResourceType',
        'updateTime'       => 'UpdateTime',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->isDefaultVersion) {
            $res['IsDefaultVersion'] = $this->isDefaultVersion;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTypeVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['IsDefaultVersion'])) {
            $model->isDefaultVersion = $map['IsDefaultVersion'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
