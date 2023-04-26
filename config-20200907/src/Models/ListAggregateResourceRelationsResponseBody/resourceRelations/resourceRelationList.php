<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponseBody\resourceRelations;

use AlibabaCloud\Tea\Model;

class resourceRelationList extends Model
{
    /**
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @example IsAttachedTo
     *
     * @var string
     */
    public $relationType;

    /**
     * @example i-j6cajg9yrfoh4sas****
     *
     * @var string
     */
    public $sourceResourceId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceResourceRegionId;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $sourceResourceType;

    /**
     * @example d-j6c8k731qbrc7fxi****
     *
     * @var string
     */
    public $targetResourceId;

    /**
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
