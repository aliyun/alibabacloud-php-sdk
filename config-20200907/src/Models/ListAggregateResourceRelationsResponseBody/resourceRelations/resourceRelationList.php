<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceRelationsResponseBody\resourceRelations;

use AlibabaCloud\Dara\Model;

class resourceRelationList extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $relationType;
    /**
     * @var string
     */
    public $sourceResourceId;
    /**
     * @var string
     */
    public $sourceResourceRegionId;
    /**
     * @var string
     */
    public $sourceResourceType;
    /**
     * @var string
     */
    public $targetResourceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
