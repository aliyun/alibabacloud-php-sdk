<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\ReplicationSourceSelectionCriteria\sseKmsEncryptedObjects;
use AlibabaCloud\Tea\Model;

class ReplicationSourceSelectionCriteria extends Model
{
    /**
     * @var sseKmsEncryptedObjects
     */
    public $sseKmsEncryptedObjects;
    protected $_name = [
        'sseKmsEncryptedObjects' => 'SseKmsEncryptedObjects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sseKmsEncryptedObjects) {
            $res['SseKmsEncryptedObjects'] = null !== $this->sseKmsEncryptedObjects ? $this->sseKmsEncryptedObjects->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationSourceSelectionCriteria
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SseKmsEncryptedObjects'])) {
            $model->sseKmsEncryptedObjects = sseKmsEncryptedObjects::fromMap($map['SseKmsEncryptedObjects']);
        }

        return $model;
    }
}
