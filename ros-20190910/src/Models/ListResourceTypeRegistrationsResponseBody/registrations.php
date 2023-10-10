<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeRegistrationsResponseBody;

use AlibabaCloud\Tea\Model;

class registrations extends Model
{
    /**
     * @description The time when the version was created. The time is displayed in UTC. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format.
     *
     * @example 2023-03-02T07:28:35
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The entity type. Only Module may be returned.
     *
     * @example Module
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The ID of the registration record.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $registrationId;

    /**
     * @description The resource type.
     *
     * @example MODULE::MyOrganization::MyService::MyUsecase
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The registration state. Valid values:
     *
     *   IN_PROGRESS
     *   COMPLETE
     *   FAILED
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason for the state.
     *
     * @example Module is created successfully
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The version ID.
     *
     * @example v1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'entityType'     => 'EntityType',
        'registrationId' => 'RegistrationId',
        'resourceType'   => 'ResourceType',
        'status'         => 'Status',
        'statusReason'   => 'StatusReason',
        'versionId'      => 'VersionId',
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
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
