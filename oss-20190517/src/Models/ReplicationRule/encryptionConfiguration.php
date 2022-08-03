<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\ReplicationRule;

use AlibabaCloud\Tea\Model;

class encryptionConfiguration extends Model
{
    /**
     * @var string
     */
    public $replicaKmsKeyID;
    protected $_name = [
        'replicaKmsKeyID' => 'ReplicaKmsKeyID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicaKmsKeyID) {
            $res['ReplicaKmsKeyID'] = $this->replicaKmsKeyID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryptionConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicaKmsKeyID'])) {
            $model->replicaKmsKeyID = $map['ReplicaKmsKeyID'];
        }

        return $model;
    }
}
