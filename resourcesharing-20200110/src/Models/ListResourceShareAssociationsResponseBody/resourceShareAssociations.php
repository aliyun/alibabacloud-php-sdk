<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody\resourceShareAssociations\associationFailedDetails;
use AlibabaCloud\Tea\Model;

class resourceShareAssociations extends Model
{
    /**
     * @description The information about the failure.
     *
     * @var associationFailedDetails[]
     */
    public $associationFailedDetails;

    /**
     * @description The association status. Valid values:
     *
     *   Associating: The entity is being associated.
     *   Associated: The entity is associated.
     *   Failed: The entity fails to be associated.
     *   Disassociating: The entity is being disassociated.
     *   Disassociated: The entity is disassociated.
     *
     * >  The system deletes the records of entities in the `Failed` or `Disassociated` state within 48 hours to 96 hours.
     * @example Associated
     *
     * @var string
     */
    public $associationStatus;

    /**
     * @description The cause of the association failure.
     *
     * @example The reason for the association failure.
     *
     * @var string
     */
    public $associationStatusMessage;

    /**
     * @description The association type. Valid values:
     *
     *   Resource
     *   Target
     *
     * @example Resource
     *
     * @var string
     */
    public $associationType;

    /**
     * @description The time when the association of the entity was created. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of `AssociationType` is `Resource`, the value of this parameter is the time when the shared resource was associated with or disassociated from the resource share.
     *   If the value of `AssociationType` is `Target`, the value of this parameter is the time when the principal was associated with or disassociated from the resource share.
     *
     * @example 2020-12-07T07:39:01.818Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the entity. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of `AssociationType` is `Resource`, the value of this parameter is the ID of the resource.
     *   If the value of `AssociationType` is `Target`, the value of this parameter is the ID of the principal.
     *
     * @example vsw-bp1upw03qyz8n7us9****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The type of the entity. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of AssociationType is Resource, the value of this parameter is the type of the resource. For information about the types of resources that can be shared, see [Services that work with Resource Sharing](https://help.aliyun.com/document_detail/450526.html).
     *   If the value of AssociationType is Target, the value of this parameter is `Account`.
     *
     * @example VSwitch
     *
     * @var string
     */
    public $entityType;

    /**
     * @description Indicates whether the principal is outside the resource directory. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $external;

    /**
     * @description The ID of the resource share.
     *
     * @example rs-6GRmdD3X****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The name of the resource share.
     *
     * @example example
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @description The properties of the principal, such as the time range within which the resource is shared. Valid values of `timeRangeType`:
     *
     *   timeRange: a specific time range
     *   day: all day
     *
     * >  This parameter is returned only if the principal is an Alibaba Cloud service.
     * @example {
     * }
     * @var string
     */
    public $targetProperty;

    /**
     * @description The time when the association of the entity was updated. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of `AssociationType` is `Resource`, the value of this parameter is the time when the association of the shared resource was updated.
     *   If the value of `AssociationType` is `Target`, the value of this parameter is the time when the association of the principal was updated.
     *
     * @example 2020-12-07T07:39:02.920Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'associationFailedDetails' => 'AssociationFailedDetails',
        'associationStatus'        => 'AssociationStatus',
        'associationStatusMessage' => 'AssociationStatusMessage',
        'associationType'          => 'AssociationType',
        'createTime'               => 'CreateTime',
        'entityId'                 => 'EntityId',
        'entityType'               => 'EntityType',
        'external'                 => 'External',
        'resourceShareId'          => 'ResourceShareId',
        'resourceShareName'        => 'ResourceShareName',
        'targetProperty'           => 'TargetProperty',
        'updateTime'               => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationFailedDetails) {
            $res['AssociationFailedDetails'] = [];
            if (null !== $this->associationFailedDetails && \is_array($this->associationFailedDetails)) {
                $n = 0;
                foreach ($this->associationFailedDetails as $item) {
                    $res['AssociationFailedDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associationStatus) {
            $res['AssociationStatus'] = $this->associationStatus;
        }
        if (null !== $this->associationStatusMessage) {
            $res['AssociationStatusMessage'] = $this->associationStatusMessage;
        }
        if (null !== $this->associationType) {
            $res['AssociationType'] = $this->associationType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->external) {
            $res['External'] = $this->external;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->targetProperty) {
            $res['TargetProperty'] = $this->targetProperty;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceShareAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationFailedDetails'])) {
            if (!empty($map['AssociationFailedDetails'])) {
                $model->associationFailedDetails = [];
                $n                               = 0;
                foreach ($map['AssociationFailedDetails'] as $item) {
                    $model->associationFailedDetails[$n++] = null !== $item ? associationFailedDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AssociationStatus'])) {
            $model->associationStatus = $map['AssociationStatus'];
        }
        if (isset($map['AssociationStatusMessage'])) {
            $model->associationStatusMessage = $map['AssociationStatusMessage'];
        }
        if (isset($map['AssociationType'])) {
            $model->associationType = $map['AssociationType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['External'])) {
            $model->external = $map['External'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['TargetProperty'])) {
            $model->targetProperty = $map['TargetProperty'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
