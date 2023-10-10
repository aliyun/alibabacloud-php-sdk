<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceTypeVersions extends Model
{
    /**
     * @description The time when the version was created. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the version.
     *
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @description The entity type. Only Module may be returned.
     *
     * @example Module
     *
     * @var string
     */
    public $entityType;

    /**
     * @description Indicates whether the version is the default version. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isDefaultVersion;

    /**
     * @description The provider of the resource type. Valid values:
     *
     *   ROS: ROS
     *   Self: yourself
     *
     * @example ROS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The resource type.
     *
     * @example MODULE::MyOrganization::MyService::MyUsecase
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The time when the version was updated. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2023-02-24T08:25:21
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The version ID.
     *
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
