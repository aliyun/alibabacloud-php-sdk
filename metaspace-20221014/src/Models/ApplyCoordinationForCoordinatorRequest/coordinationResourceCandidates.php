<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20221014\Models\ApplyCoordinationForCoordinatorRequest;

use AlibabaCloud\Dara\Model;

class coordinationResourceCandidates extends Model
{
    /**
     * @var string
     */
    public $ownerEndUserId;

    /**
     * @var string
     */
    public $ownerWyId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'ownerEndUserId' => 'OwnerEndUserId',
        'ownerWyId' => 'OwnerWyId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerEndUserId) {
            $res['OwnerEndUserId'] = $this->ownerEndUserId;
        }

        if (null !== $this->ownerWyId) {
            $res['OwnerWyId'] = $this->ownerWyId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['OwnerEndUserId'])) {
            $model->ownerEndUserId = $map['OwnerEndUserId'];
        }

        if (isset($map['OwnerWyId'])) {
            $model->ownerWyId = $map['OwnerWyId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
