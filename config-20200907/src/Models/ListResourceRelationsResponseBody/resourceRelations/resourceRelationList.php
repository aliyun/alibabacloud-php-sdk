<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListResourceRelationsResponseBody\resourceRelations;

use AlibabaCloud\Tea\Model;

class resourceRelationList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The type of the relationship between the resource and the object.
     *
     * Valid values:
     *
     *   IsContained: The object is included as part of the resource.
     *
     * <!-- -->
     *
     *   IsAttachedTo: The object is added to the resource.
     *
     * <!-- -->
     *
     *   IsAssociatedIn: The object is associated with the resource.
     *
     * <!-- -->
     *
     *   Contains: The object contains the resource.
     *
     * <!-- -->
     * @example IsAttachedTo
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The resource ID.
     *
     * @example i-j6cajg9yrfoh4sas****
     *
     * @var string
     */
    public $sourceResourceId;

    /**
     * @description The ID of the region to which the current resource belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceResourceRegionId;

    /**
     * @description The type of the resource.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $sourceResourceType;

    /**
     * @description The ID of the resource that is associated with the object.
     *
     * @example d-j6c8k731qbrc7fxi****
     *
     * @var string
     */
    public $targetResourceId;

    /**
     * @description The type of the resource that is associated with the object.
     *
     * @example ACS::ECS::Disk
     *
     * @var string
     */
    public $targetResourceType;
    protected $_name = [
        'accountId'              => 'AccountId',
        'relationType'           => 'RelationType',
        'sourceResourceId'       => 'SourceResourceId',
        'sourceResourceRegionId' => 'SourceResourceRegionId',
        'sourceResourceType'     => 'SourceResourceType',
        'targetResourceId'       => 'TargetResourceId',
        'targetResourceType'     => 'TargetResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }
        if (null !== $this->sourceResourceRegionId) {
            $res['SourceResourceRegionId'] = $this->sourceResourceRegionId;
        }
        if (null !== $this->sourceResourceType) {
            $res['SourceResourceType'] = $this->sourceResourceType;
        }
        if (null !== $this->targetResourceId) {
            $res['TargetResourceId'] = $this->targetResourceId;
        }
        if (null !== $this->targetResourceType) {
            $res['TargetResourceType'] = $this->targetResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceRelationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['SourceResourceId'])) {
            $model->sourceResourceId = $map['SourceResourceId'];
        }
        if (isset($map['SourceResourceRegionId'])) {
            $model->sourceResourceRegionId = $map['SourceResourceRegionId'];
        }
        if (isset($map['SourceResourceType'])) {
            $model->sourceResourceType = $map['SourceResourceType'];
        }
        if (isset($map['TargetResourceId'])) {
            $model->targetResourceId = $map['TargetResourceId'];
        }
        if (isset($map['TargetResourceType'])) {
            $model->targetResourceType = $map['TargetResourceType'];
        }

        return $model;
    }
}
