<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketReplicationRequest extends Model
{
    /**
     * @var ReplicationConfiguration
     */
    public $replicationConfiguration;
    protected $_name = [
        'replicationConfiguration' => 'ReplicationConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicationConfiguration) {
            $res['ReplicationConfiguration'] = null !== $this->replicationConfiguration ? $this->replicationConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketReplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicationConfiguration'])) {
            $model->replicationConfiguration = ReplicationConfiguration::fromMap($map['ReplicationConfiguration']);
        }

        return $model;
    }
}
