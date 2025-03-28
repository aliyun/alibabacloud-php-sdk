<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypeRegistrationsResponseBody;

use AlibabaCloud\Dara\Model;

class registrations extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $registrationId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'entityType' => 'EntityType',
        'registrationId' => 'RegistrationId',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
