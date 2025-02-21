<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class CreateReverseDtsJobRequest extends Model
{
    /**
     * @var string
     */
    public $dtsJobId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $shardPassword;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
