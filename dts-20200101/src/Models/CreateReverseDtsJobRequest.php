<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateReverseDtsJobRequest extends Model
{
    /**
     * @description The ID of the synchronization or migration task, which can be queried by calling [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html).
     *
     * This parameter is required.
     * @example n99m9jx822k****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description Resource GroupId
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Shard Password
     *
     * @example DTStest****
     *
     * @var string
     */
    public $shardPassword;

    /**
     * @description Shard User name
     *
     * @example dtstest
     *
     * @var string
     */
    public $shardUsername;
    protected $_name = [
        'dtsJobId'        => 'DtsJobId',
        'resourceGroupId' => 'ResourceGroupId',
        'shardPassword'   => 'ShardPassword',
        'shardUsername'   => 'ShardUsername',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shardPassword) {
            $res['ShardPassword'] = $this->shardPassword;
        }
        if (null !== $this->shardUsername) {
            $res['ShardUsername'] = $this->shardUsername;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReverseDtsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShardPassword'])) {
            $model->shardPassword = $map['ShardPassword'];
        }
        if (isset($map['ShardUsername'])) {
            $model->shardUsername = $map['ShardUsername'];
        }

        return $model;
    }
}
