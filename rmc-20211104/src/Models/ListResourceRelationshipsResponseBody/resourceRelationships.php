<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104\Models\ListResourceRelationshipsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceRelationships extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 154035569884****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The region ID of the specified resource.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description The ID of the specified resource.
     *
     * @example i-uf6imlgyr1nudhud****
     *
     * @var string
     */
    public $sourceResourceId;

    /**
     * @description The type of the specified resource.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $sourceResourceType;

    /**
     * @description The region ID of the associated resource.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $targetRegionId;

    /**
     * @description The ID of the associated resource.
     *
     * @example vpc-uf6gvyids4utxhxe1****
     *
     * @var string
     */
    public $targetResourceId;

    /**
     * @description The type of the associated resource.
     *
     * @example ACS::VPC::VPC
     *
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
