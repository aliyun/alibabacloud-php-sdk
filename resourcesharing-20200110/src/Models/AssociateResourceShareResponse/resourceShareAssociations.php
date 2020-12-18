<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareResponse;

use AlibabaCloud\Tea\Model;

class resourceShareAssociations extends Model
{
    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var string
     */
    public $resourceShareName;

    /**
     * @var string
     */
    public $associationType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $associationStatus;

    /**
     * @var string
     */
    public $associationStatusMessage;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'resourceShareId'          => 'ResourceShareId',
        'resourceShareName'        => 'ResourceShareName',
        'associationType'          => 'AssociationType',
        'entityId'                 => 'EntityId',
        'entityType'               => 'EntityType',
        'associationStatus'        => 'AssociationStatus',
        'associationStatusMessage' => 'AssociationStatusMessage',
        'createTime'               => 'CreateTime',
        'updateTime'               => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('resourceShareId', $this->resourceShareId, true);
        Model::validateRequired('resourceShareName', $this->resourceShareName, true);
        Model::validateRequired('associationType', $this->associationType, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('associationStatus', $this->associationStatus, true);
        Model::validateRequired('associationStatusMessage', $this->associationStatusMessage, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->associationType) {
            $res['AssociationType'] = $this->associationType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->associationStatus) {
            $res['AssociationStatus'] = $this->associationStatus;
        }
        if (null !== $this->associationStatusMessage) {
            $res['AssociationStatusMessage'] = $this->associationStatusMessage;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['AssociationType'])) {
            $model->associationType = $map['AssociationType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['AssociationStatus'])) {
            $model->associationStatus = $map['AssociationStatus'];
        }
        if (isset($map['AssociationStatusMessage'])) {
            $model->associationStatusMessage = $map['AssociationStatusMessage'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
