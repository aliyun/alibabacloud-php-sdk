<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceRelationshipsResponseBody;

use AlibabaCloud\Dara\Model;

class resourceRelationships extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relatedResourceId;

    /**
     * @var string
     */
    public $relatedResourceRegionId;

    /**
     * @var string
     */
    public $relatedResourceType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'accountId' => 'AccountId',
        'regionId' => 'RegionId',
        'relatedResourceId' => 'RelatedResourceId',
        'relatedResourceRegionId' => 'RelatedResourceRegionId',
        'relatedResourceType' => 'RelatedResourceType',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relatedResourceId) {
            $res['RelatedResourceId'] = $this->relatedResourceId;
        }

        if (null !== $this->relatedResourceRegionId) {
            $res['RelatedResourceRegionId'] = $this->relatedResourceRegionId;
        }

        if (null !== $this->relatedResourceType) {
            $res['RelatedResourceType'] = $this->relatedResourceType;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelatedResourceId'])) {
            $model->relatedResourceId = $map['RelatedResourceId'];
        }

        if (isset($map['RelatedResourceRegionId'])) {
            $model->relatedResourceRegionId = $map['RelatedResourceRegionId'];
        }

        if (isset($map['RelatedResourceType'])) {
            $model->relatedResourceType = $map['RelatedResourceType'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
