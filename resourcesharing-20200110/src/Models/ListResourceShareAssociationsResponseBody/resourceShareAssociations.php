<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareAssociationsResponseBody\resourceShareAssociations\associationFailedDetails;

class resourceShareAssociations extends Model
{
    /**
     * @var associationFailedDetails[]
     */
    public $associationFailedDetails;

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
    public $associationType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var bool
     */
    public $external;

    /**
     * @var string
     */
    public $resourceArn;

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
    public $targetProperty;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'associationFailedDetails' => 'AssociationFailedDetails',
        'associationStatus' => 'AssociationStatus',
        'associationStatusMessage' => 'AssociationStatusMessage',
        'associationType' => 'AssociationType',
        'createTime' => 'CreateTime',
        'entityId' => 'EntityId',
        'entityType' => 'EntityType',
        'external' => 'External',
        'resourceArn' => 'ResourceArn',
        'resourceShareId' => 'ResourceShareId',
        'resourceShareName' => 'ResourceShareName',
        'targetProperty' => 'TargetProperty',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->associationFailedDetails)) {
            Model::validateArray($this->associationFailedDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationFailedDetails) {
            if (\is_array($this->associationFailedDetails)) {
                $res['AssociationFailedDetails'] = [];
                $n1 = 0;
                foreach ($this->associationFailedDetails as $item1) {
                    $res['AssociationFailedDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationFailedDetails'])) {
            if (!empty($map['AssociationFailedDetails'])) {
                $model->associationFailedDetails = [];
                $n1 = 0;
                foreach ($map['AssociationFailedDetails'] as $item1) {
                    $model->associationFailedDetails[$n1] = associationFailedDetails::fromMap($item1);
                    ++$n1;
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

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
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
