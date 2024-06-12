<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateResourceCountsGroupByResourceTypeRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-a260626622af0005****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the folder in the resource directory.
     *
     * For more information about how to obtain the ID of a folder, see [View the basic information of a folder](https://help.aliyun.com/document_detail/111223.html).
     * @example r-BU****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the Alibaba Cloud account to which the resources in the account group belong.
     *
     * > You can specify either the ResourceAccountId or ResourceOwnerId parameter. We recommend that you specify the ResourceAccountId parameter.
     * @example 100931896542****
     *
     * @var int
     */
    public $resourceAccountId;

    /**
     * @deprecated
     *
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'folderId'          => 'FolderId',
        'region'            => 'Region',
        'resourceAccountId' => 'ResourceAccountId',
        'resourceOwnerId'   => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
