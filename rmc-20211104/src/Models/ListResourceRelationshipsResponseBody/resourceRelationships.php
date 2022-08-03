<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104\Models\ListResourceRelationshipsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceRelationships extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $sourceResourceId;

    /**
     * @var string
     */
    public $sourceResourceType;

    /**
     * @var string
     */
    public $targetRegionId;

    /**
     * @var string
     */
    public $targetResourceId;

    /**
     * @var string
     */
    public $targetResourceType;
    protected $_name = [
        'accountId'          => 'AccountId',
        'sourceRegionId'     => 'SourceRegionId',
        'sourceResourceId'   => 'SourceResourceId',
        'sourceResourceType' => 'SourceResourceType',
        'targetRegionId'     => 'TargetRegionId',
        'targetResourceId'   => 'TargetResourceId',
        'targetResourceType' => 'TargetResourceType',
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
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }
        if (null !== $this->sourceResourceType) {
            $res['SourceResourceType'] = $this->sourceResourceType;
        }
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
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
     * @return resourceRelationships
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['SourceResourceId'])) {
            $model->sourceResourceId = $map['SourceResourceId'];
        }
        if (isset($map['SourceResourceType'])) {
            $model->sourceResourceType = $map['SourceResourceType'];
        }
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
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
